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

namespace FireBox\Core\Analytics\Helpers;

if (!defined('ABSPATH'))
{
	exit; // Exit if accessed directly.
}

class Metrics
{
	public static function getClassFromSlug($slug = null)
	{
		$class = '';

		switch ($slug)
		{
			case 'views':
			case 'conversions':
				$class = ucfirst($slug);
				break;
			case 'averagetimeopen':
				$class = 'AverageTimeOpen';
				break;
			case 'conversionrate':
				$class = 'ConversionRate';
				break;
		}

		return $class;
	}
}