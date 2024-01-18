<?php
/**
 * @package         FirePlugins Framework
 * @version         1.1.87
 * 
 * @author          FirePlugins <info@fireplugins.com>
 * @link            https://www.fireplugins.com
 * @copyright       Copyright © 2023 FirePlugins All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
*/

namespace FPFramework\Base\Conditions\Conditions\EDD;

defined('ABSPATH') or die;

class CurrentProductPrice extends EDDBase
{
    /**
	 * Passes the condition.
	 * 
	 * @return  bool
	 */
	public function pass()
	{
		return $this->passCurrentProductPrice();
    }
}