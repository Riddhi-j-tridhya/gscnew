<?php
/**
 * @package         FireBox
 * @version         2.1.3 Free
 * 
 * @author          FirePlugins <info@fireplugins.com>
 * @link            https://www.fireplugins.com
 * @copyright       Copyright © 2023 FirePlugins All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
*/

namespace FireBox\Core;

if (!defined('ABSPATH'))
{
	exit; // Exit if accessed directly.
}

class Migrator
{
	/**
	 * The currently installed version.
	 * 
	 * @var string
	 */
	private $installedVersion;

	/**
	 * Whether we run a migration.
	 * 
	 * @var bool
	 */
	private $run = false;
	
	public function __construct($installedVersion = '')
	{
		$this->installedVersion = $installedVersion;
	}

	public function run()
	{
		if (!$this->installedVersion)
		{
			return;
		}

		$this->moveFireBoxDataToUploadsDirectory();
		$this->installFormsTables();
		$this->improveIndexes();
		$this->updatePublishingRulesToConditionBuilder();
		$this->updateEcommerceProductsInCartConditions();
		$this->updateAnalyticsStoragePeriodSetting();

		// Update firebox version
		if ($this->run)
		{
			// Update version
			update_option('firebox_version', FBOX_VERSION);
		}
	}

	/**
	 * Moves plugin data to its own /wp-content/uploads/firebox folder.
	 * 
	 * @since	1.1.10
	 * 
	 * @return  void
	 */
	private function moveFireBoxDataToUploadsDirectory()
	{
        if (version_compare($this->installedVersion, '1.1.10', '>=')) 
        {
            return;
        }

		// Create dirs
		\FireBox\Core\Helpers\Activation::createLibraryDirectories();
		
		$this->run = true;
	}

	/**
	 * Creates the forms tables.
	 * 
	 * @since   1.2.0
	 * 
	 * @return  void
	 */
	private function installFormsTables()
	{
        if (version_compare($this->installedVersion, '1.2.0', '>=')) 
        {
            return;
        }

		if (!class_exists('Activation'))
		{
			require_once FBOX_PLUGIN_DIR . '/Inc/Framework/Inc/Admin/Includes/Activation.php';
		}
		$activation = new \Activation(firebox()->hook_data);
		$activation->initTables();
		
		$this->run = true;
	}

	/**
	 * Improves indexes on form and box logs tables.
	 * 
	 * @since   1.2.4
	 * 
	 * @return  void
	 */
	private function improveIndexes()
	{
        if (version_compare($this->installedVersion, '1.2.4', '>=')) 
        {
            return;
        }

		if (!$this->hasIndex('idx_box_id', 'firebox_logs'))
		{
			global $wpdb;
			$wpdb->query("ALTER TABLE {$wpdb->prefix}firebox_logs ADD INDEX `idx_box_id` (`box`, `id`)");
		}

		if (!$this->hasIndex('idx_meta_key', 'firebox_submission_meta'))
		{
			global $wpdb;
			$wpdb->query("ALTER TABLE {$wpdb->prefix}firebox_submission_meta ADD INDEX `idx_meta_key` (`meta_key`)");
		}
		
		$this->run = true;
	}

	/**
	 * Update old Publishing Rules to Condition Builder.
	 * 
	 * @since   2.0.0
	 * 
	 * @return  void
	 */
	private function updatePublishingRulesToConditionBuilder()
	{
		if (version_compare($this->installedVersion, '2.0.0', '>=')) 
		{
			return;
		}

		// Get all boxes, regardless of post status, thus we pass [] to ensure all popups are returned.
		$boxes = \FireBox\Core\Helpers\BoxHelper::getAllBoxes([]);

		if (!$boxes->posts)
		{
			$this->run = true;
			return;
		}

		foreach ($boxes->posts as $box)
		{
			// Get post meta and add it to its object
			$meta = \FireBox\Core\Helpers\BoxHelper::getMeta($box->ID);
			
			// Skip popup that already has rules
			if (isset($meta['rules']))
			{
				continue;
			}

			$box->params = new \FPFramework\Libs\Registry($meta);

			// Pass only params
			\FPFramework\Base\Conditions\Migrator::run($box->params);

			// Update popup settings
			update_post_meta($box->ID, 'fpframework_meta_settings', wp_slash(json_decode(json_encode($box->params), true)));
		}

		$this->run = true;
	}

	/**
	 * Updates the following conditions to match the new condition settings.
	 * 
	 * EDD\CartContainsProducts
	 * WooCommerce\CartContainsProducts
	 * 
	 * @return  void
	 */
	private function updateEcommerceProductsInCartConditions()
	{
		if (version_compare($this->installedVersion, '2.0.10', '>=')) 
		{
			return;
		}

		// Get all boxes, regardless of post status, thus we pass [] to ensure all popups are returned.
		$boxes = \FireBox\Core\Helpers\BoxHelper::getAllBoxes([]);

		if (!$boxes->posts)
		{
			$this->run = true;
			return;
		}

		foreach ($boxes->posts as $box)
		{
			$meta = \FireBox\Core\Helpers\BoxHelper::getMeta($box->ID);

			if (!isset($meta['rules']) || !is_array($meta['rules']))
			{
				continue;
			}

			$allowed_rules = [
				'EDD\CartContainsProducts',
				'WooCommerce\CartContainsProducts'
			];

			$changed = false;

			foreach ($meta['rules'] as &$ruleset)
			{
				if (!isset($ruleset['rules']))
				{
					continue;
				}
				
				foreach ($ruleset['rules'] as &$rule)
				{
					if (!isset($rule['name']))
					{
						continue;
					}
					
					if (!in_array($rule['name'], $allowed_rules))
					{
						continue;
					}

					if (!isset($rule['value']))
					{
						continue;
					}

					if (!is_array($rule['value']))
					{
						continue;
					}

					if (!count($rule['value']))
					{
						continue;
					}

					$changed = true;

					$rule['value'] = array_map(function($id) {
						// Old value wasn't an array, skip if new value was found
						if (is_array($id))
						{
							return $id;
						}
						
						return [
							'value' => $id,
							'quantity_operator' => 'any',
							'quantity_value1' => '1',
							'quantity_value2' => '1'
						];
					}, $rule['value']);
				}
			}

			if (!$changed)
			{
				continue;
			}
			
			update_post_meta($box->ID, 'fpframework_meta_settings', wp_slash(json_decode(json_encode($meta), true)));
		}

		$this->run = true;
	}

	/**
	 * Updates the Analytics Storage Period setting.
	 * 
	 * @return  void
	 */
	public function updateAnalyticsStoragePeriodSetting()
	{
		if (version_compare($this->installedVersion, '2.1.1', '>=')) 
		{
			return;
		}

		$params = get_option('firebox_settings');

		$statsdays = isset($params['statsdays']) ? $params['statsdays'] : 730;
		$statsdays_custom = isset($params['statsdays_custom']) ? $params['statsdays_custom'] : false;

		if ($statsdays === 'custom')
		{
			$statsdays = $statsdays_custom;
		}

		$statsdays = (int) $statsdays;

		if ($statsdays <= 365)
		{
			$statsdays = 365;
		}
		else if ($statsdays <= 365 * 2)
		{
			$statsdays = 365 * 2;
		}
		else
		{
			$statsdays = 365 * 5;
		}

		$params['statsdays'] = $statsdays;

		update_option('firebox_settings', $params);

		$this->run = true;
	}

	/**
	 * Checks whether an index exists in a table.
	 * 
	 * @param   string  $index
	 * @param   string  $table
	 * 
	 * @return  bool
	 */
	private function hasIndex($index = '', $table = '')
	{
		if (empty($index) || empty($table))
		{
			return;
		}

		global $wpdb;
		
		$existing = $wpdb->get_row("SHOW CREATE TABLE `{$wpdb->prefix}{$table}`", ARRAY_N);

		if (isset($existing[1]) && strpos(strtolower($existing[1]), 'key `' . $index . '` (') !== false)
		{
			return true;
		}

		return false;
	}
}