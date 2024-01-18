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

namespace FireBox\Core\Analytics;

if (!defined('ABSPATH'))
{
	exit; // Exit if accessed directly.
}

class Data
{
	private $start_date = null;

	private $end_date = null;
	
	private $metrics = [];

	private $filters = [];

	private $offset = null;

	private $limit = null;

	protected $options = [];
	
	public function __construct($start_date = null, $end_date = null, $options = [])
	{
		$this->start_date = $start_date;
		$this->end_date = $end_date;
		$this->options = $options;
	}

	/**
	 * Allowed metrics:
	 * 
	 * [
	 * 	  'impressions',
	 * 	  'averagetimeopen',
	 * 	  'submissions',
	 * 	  'conversionrate'
	 * ]
	 */
	public function setMetrics($metrics = [])
	{
		$this->metrics = $metrics;
	}

	public function setFilters($filters = [])
	{
		$this->filters = $filters;
	}

	public function setOffset($offset = null)
	{
		$this->offset = (int) $offset;
	}

	public function setLimit($limit = null)
	{
		$this->limit = (int) $limit;
	}

	public function getData($type = 'list')
	{
		$data = array_fill_keys($this->metrics, []);

		foreach ($data as $metric_slug => &$metric_data)
		{
			// Validate the given metric name and abort if unknown
			if (!$class_name = \FireBox\Core\Analytics\Helpers\Metrics::getClassFromSlug($metric_slug))
			{
				unset($data[$metric_slug]);
				continue;
			}

			$class = '\FireBox\Core\Analytics\Metrics\\' . $class_name;
			$class = new $class($this->start_date, $this->end_date, $type, $this->options);

			if ($this->filters)
			{
				$class->setFilters($this->filters);
			}

			if ($this->offset)
			{
				$class->setOffset($this->offset);
			}

			if ($this->limit)
			{
				$class->setLimit($this->limit);
			}

			$metric_data = $class->getData();

			/**
			 * Get list of impressions from start_date till end_date
			 * $metric = new \FireBox\Core\Analytics\Metrics\Impressions($start_date, $end_date);
			 * $metric->getData();
			 * 
			 * Output:
			 * [
			 *    'date1' => 500,
			 *    'date2' => 200
			 * ]
			 * 
			 * Get total impressions from start_date till end_date
			 * $metric = new \FireBox\Core\Analytics\Metrics\Impressions($start_date, $end_date);
			 * $metric->getData('count');
			 * 
			 * Output:
			 * 700
			 * 
			 * Get total impressions from start_date till end_date with the following filters:
			 * $metric = new \FireBox\Core\Analytics\Metrics\Impressions($start_date, $end_date);
			 * $metric->setFilters($filters);
			 * $metric->getData('count');
			 * 
			 * Filters payload:
			 * [
			 *    'campaigns' => [
			 *        'value' => [5, 10, 15],
			 *    ],
			 *    'country' => [
			 *        'value' => ['GR', 'UK', 'USA', 'DE'],
			 *    ],
			 *    'device' => [
			 *        'value' => ['desktop', 'tablet'],
			 *    ],
			 *    'event' => [
			 *        'value' => ['close'],
			 *    ],
			 *    'page' => [
			 * 		  'type' => 'contains', // contains, not_contains, equals
			 *        'value' => ['/about', 'fireplugins'],
			 *    ],
			 *    'referrer' => [
			 * 		  'type' => 'contains', // contains, not_contains, equals
			 *        'value' => ['google.com', 'facebook.com'],
			 *    ]
			 * ]
			 * 
			 * Output:
			 * 50
			 */

			$class->onAfterGetData($metric_data);
		}
		
		return $data;
	}
}