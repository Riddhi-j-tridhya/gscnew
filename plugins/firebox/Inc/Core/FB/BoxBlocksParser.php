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

namespace FireBox\Core\FB;

if (!defined('ABSPATH'))
{
	exit; // Exit if accessed directly.
}

class BoxBlocksParser
{
    public function __construct()
    {
		// filter the post content by setting supported block attributes
		add_action('render_block', [$this, 'modify_block_output'], 10, 2);
	}

	/**
	 * Filters the block output by appending out custom data attributes
	 * on our supported blocks
	 * 
	 * @param   string  $block_content
	 * @param   array   $block
	 * 
	 * @return  string
	 */
	public function modify_block_output($block_content, $block)
	{
		if (!isset($block['blockName']))
		{
			return $block_content;
		}

		$blockName = $block['blockName'];

		$parsable_blocks = [
			'firebox/buttons',
			'firebox/image',
			'core/buttons',
			'core/image'
		];
		
		if (!in_array($blockName, $parsable_blocks))
		{
			return $block_content;
		}

		/**
		 * Handle Core Buttons Block
		 */
		if (in_array($blockName, ['core/buttons', 'firebox/buttons']))
		{
			$buttons = isset($block['innerBlocks']) ? $block['innerBlocks'] : [];
			if (!$buttons)
			{
				return $block_content;
			}

			foreach ($buttons as $button)
			{
				$block_content = $this->replaceBlockAttributes('a', $button, $block_content);
			}
		}
		/**
		 * Handle Core Image Block
		 */
		else if (in_array($blockName, ['core/image', 'firebox/image']))
		{
			$new_block_html = $block['innerHTML'];

			// check if we have an anchor element and add attributes to this elem.
			$anchorExists = substr_count($new_block_html, '<a ');

			$element = $anchorExists ? 'a' : 'figure';

			$block_content = $this->replaceBlockAttributes($element, $block, $block_content);
		}

		return $block_content;
	}

	/**
	 * Adds the data attributes and class($atts) to the given element($element) within the block content($block_content)
	 * 
	 * @param   string  $element
	 * @param   array   $block
	 * @param   string  $block_element
	 * 
	 * @return  string
	 */
	private function replaceBlockAttributes($element, $block, $block_content)
	{
		$atts = $this->getBlockAttributes($block);
		if (!$atts['enabled'])
		{
			return $block_content;
		}

		$new_block_html = $block['innerHTML'];
		
		// box
		if (!is_null($atts['box']) && $atts['box'] !== 'none')
		{
			if ($atts['box'] !== 'current')
			{
				$new_block_html = str_replace('<' . $element . ' ', '<' . $element . ' data-fbox="' . esc_attr($atts['box']) . '" ', $new_block_html);
			}

			// cmd
			if ($atts['cmd'])
			{
				$new_block_html = str_replace('<' . $element . ' ', '<' . $element . ' data-fbox-cmd="' . esc_attr($atts['cmd']) . '" ', $new_block_html);
			}
	
			// prevent default
			$new_block_html = str_replace('<' . $element . ' ', '<' . $element . ' data-fbox-prevent="1" ', $new_block_html);
		}

		// class
		if (isset($atts['class']) && !empty($atts['class']))
		{
			$new_block_html = preg_replace('/<' . $element . '(.*)class="/', "<" . $element . "$1class=\"" . esc_attr($atts['class']) . ' ', $new_block_html);
		}

		return str_replace($block['innerHTML'], $new_block_html, $block_content);
	}
	
	/**
	 * Retrieves the block attributes
	 * 
	 * @param   array  $block
	 * 
	 * @return  array
	 */
	private function getBlockAttributes($block)
	{
		$atts = [];

		$atts['enabled'] = isset($block['attrs']['dataFBoxEnabled']) ?: false;

		if (!$atts['enabled'])
		{
			return $atts;
		}
		
		$atts['box'] = isset($block['attrs']['dataFBox']) ? $block['attrs']['dataFBox'] : null;
		$atts['cmd'] = isset($block['attrs']['dataFBoxCmd']) ? $block['attrs']['dataFBoxCmd'] : 'open';
		$atts['class'] = isset($block['attrs']['dataFBoxClass']) ? $block['attrs']['dataFBoxClass'] : '';

		return $atts;
	}
}