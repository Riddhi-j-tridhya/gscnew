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

namespace FireBox\Core\Blocks\Form;

if (!defined('ABSPATH'))
{
	exit; // Exit if accessed directly.
}

class Dropdown extends \FireBox\Core\Blocks\Block
{
	/**
	 * Block identifier.
	 * 
	 * @var  string
	 */
	protected $name = 'dropdown';

	/**
	 * Gutenberg Editor block script.
	 * 
	 * @var  string
	 */
	protected $editor_script = 'fb-block-dropdown';

	/**
	 * Registers Gutenberg Editor block assets.
	 * 
	 * @return  void
	 */
	public function assets()
	{
		wp_register_script(
			'fb-block-dropdown',
			FBOX_MEDIA_ADMIN_URL . 'js/blocks/blocks/form/dropdown.js',
			['wp-i18n', 'wp-blocks', 'wp-editor', 'wp-components', 'wp-api-fetch'],
			FBOX_VERSION,
			true
		);
	}

	public function render_callback($attributes, $content)
	{
		$blockPayload = [
			'blockName' => $this->name,
			'attrs' => $attributes
		];

		$default_choices = [
			[
				'default' => false,
				'value' => 1,
				'label' => 'Choice 1',
				'image' => ''
			],
			[
				'default' => false,
				'value' => 2,
				'label' => 'Choice 2',
				'image' => ''
			],
			[
				'default' => false,
				'value' => 3,
				'label' => 'Choice 3',
				'image' => ''
			]
		];

		$payload = [
			'id' => $attributes['uniqueId'],
			'name' => isset($attributes['fieldName']) ? $attributes['fieldName'] : \FireBox\Core\Helpers\Form\Field::getFieldName($blockPayload),
			'label' => isset($attributes['fieldLabel']) ? $attributes['fieldLabel'] : \FireBox\Core\Helpers\Form\Field::getFieldLabel($blockPayload),
			'hideLabel' => isset($attributes['hideLabel']) ? $attributes['hideLabel'] : false,
			'requiredFieldIndication' => isset($attributes['fieldLabelRequiredFieldIndication']) ? $attributes['fieldLabelRequiredFieldIndication'] : true,
			'required' => isset($attributes['required']) ? $attributes['required'] : true,
			'description' => isset($attributes['helpText']) ? $attributes['helpText'] : '',
			'value' => isset($attributes['defaultValue']) ? $attributes['defaultValue'] : '',
			'width' => isset($attributes['width']) ? $attributes['width'] : '',
			'placeholder' => isset($attributes['placeholder']) ? $attributes['placeholder'] : '',
			'css_class' => isset($attributes['cssClass']) ? [$attributes['cssClass']] : [],
			'input_css_class' => isset($attributes['inputCssClass']) ? [$attributes['inputCssClass']] : [],
			'choices' => isset($attributes['choices']) ? $attributes['choices'] : $default_choices
		];

		// Replace Smart Tags
		$payload = \FPFramework\Base\SmartTags\SmartTags::getInstance()->replace($payload);
		
		$field = new \FireBox\Core\Form\Fields\Fields\Dropdown($payload);

		// $content contains CSS variables for the field
		return $content . $field->render();
	}
}