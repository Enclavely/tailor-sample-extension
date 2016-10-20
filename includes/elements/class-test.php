<?php

/**
 * Tailor test element class.
 */

if ( ! defined( 'WPINC' ) ) {
    die;
}

if ( class_exists( 'Tailor_Element' ) && ! class_exists( 'Tailor_Test_Element' ) ) {

    /**
     * Tailor test element class.
     */
    class Tailor_Test_Element extends Tailor_Element {

	    /**
	     * Registers element settings, sections and controls.
	     *
	     * @access protected
	     */
	    protected function register_controls() {
		    
		    $this->add_section( 'general', array(
			    'title'                 =>  __( 'General' ),
			    'priority'              =>  10,
		    ) );

		    $this->add_section( 'colors', array(
			    'title'                 =>  __( 'Colors' ),
			    'priority'              =>  30,
		    ) );

		    $this->add_section( 'attributes', array(
			    'title'                 =>  __( 'Attributes' ),
			    'priority'              =>  40,
		    ) );

		    $priority = 0;


		    $this->add_setting( 'button_group', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  'center',
		    ) );
		    $this->add_control( 'button_group', array(
			    'label'                 =>  __( 'Button group' ),
			    'type'                  =>  'button-group',
			    'choices'               =>  array(
				    'left'                  =>  '<i class="tailor-icon tailor-align-left"></i>',
				    'center'                =>  '<i class="tailor-icon tailor-align-center"></i>',
				    'right'                 =>  '<i class="tailor-icon tailor-align-right"></i>',
			    ),
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'checkbox', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  'right',
		    ) );
		    $this->add_control( 'checkbox', array(
			    'label'                 =>  __( 'Checkboxes' ),
			    'type'                  =>  'checkbox',
			    'choices'               =>  array(
				    'left'                  =>  'Left',
				    'center'                =>  'Center',
				    'right'                 =>  'Right',
			    ),
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'radio', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  'right',
		    ) );
		    $this->add_control( 'radio', array(
			    'label'                 =>  __( 'Radio' ),
			    'type'                  =>  'radio',
			    'choices'               =>  array(
				    'left'                  =>  'Left',
				    'center'                =>  'Center',
				    'right'                 =>  'Right',
			    ),
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'colorpicker', array(
			    'sanitize_callback'     =>  'tailor_sanitize_color',
			    'default'               =>  '#dddddd',
		    ) );
		    $this->add_control( 'colorpicker', array(
			    'label'                 =>  __( 'Colorpicker' ),
			    'type'                  =>  'colorpicker',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'content', array(
			    'sanitize_callback'     =>  'tailor_sanitize_html',
			    'default'               =>  'This is sample content',
		    ) );
		    $this->add_control( 'content', array(
			    'label'                 =>  __( 'Content' ),
			    'type'                  =>  'editor',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'gallery', array(
			    'sanitize_callback'     =>  'tailor_sanitize_number',
			    'default'               =>  '',
		    ) );
		    $this->add_control( 'gallery', array(
			    'label'                 =>  __( 'Gallery' ),
			    'type'                  =>  'gallery',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'image', array(
			    'sanitize_callback'     =>  'tailor_sanitize_number',
			    'default'               =>  '',
		    ) );
		    $this->add_control( 'image', array(
			    'label'                 =>  __( 'Image' ),
			    'type'                  =>  'image',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'video', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  '',
		    ) );
		    $this->add_control( 'video', array(
			    'label'                 =>  __( 'Video' ),
			    'type'                  =>  'video',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'text', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  '',
		    ) );
		    $this->add_control( 'text', array(
			    'label'                 =>  __( 'Text' ),
			    'type'                  =>  'text',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'textarea', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  '',
		    ) );
		    $this->add_control( 'textarea', array(
			    'label'                 =>  __( 'Textarea' ),
			    'type'                  =>  'textarea',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );


		    $this->add_setting( 'range', array(
			    'sanitize_callback'     =>  'tailor_sanitize_number',
			    'default'               =>  '50',
		    ) );
		    $this->add_control( 'range', array(
			    'label'                 =>  __( 'Range' ),
			    'type'                  =>  'range',
			    'input_attrs'           =>  array(
				    'min'                   =>  20,
				    'max'                   =>  200,
				    'step'                  =>  10,
			    ),
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'select', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  'right',
		    ) );
		    $this->add_control( 'select', array(
			    'label'                 =>  __( 'Select' ),
			    'type'                  =>  'select',
			    'choices'               =>  array(
				    'left'                  =>  'Left',
				    'center'                =>  'Center',
				    'right'                 =>  'Right',
			    ),
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'select_multi', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  'right',
		    ) );
		    $this->add_control( 'select_multi', array(
			    'label'                 =>  __( 'Select multi' ),
			    'type'                  =>  'select-multi',
			    'choices'               =>  array(
				    'left'                  =>  'Left',
				    'center'                =>  'Center',
				    'right'                 =>  'Right',
			    ),
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'style', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  '10px-20px-30px-40px',
		    ) );
		    $this->add_control( 'style', array(
			    'label'                 =>  __( 'Style' ),
			    'type'                  =>  'style',
			    'choices'               =>  array(
				    'top'                   =>  __( 'Top' ),
				    'right'                 =>  __( 'Right' ),
				    'bottom'                =>  __( 'Bottom' ),
				    'left'                  =>  __( 'Left' ),
			    ),
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'switch', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
		    ) );
		    $this->add_control( 'switch', array(
			    'label'                 =>  __( 'Switch' ),
			    'type'                  =>  'switch',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'switch_on', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  '1',
		    ) );
		    $this->add_control( 'switch_on', array(
			    'label'                 =>  __( 'Switch (default on)' ),
			    'type'                  =>  'switch',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'switch_off', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  '0',
		    ) );
		    $this->add_control( 'switch_off', array(
			    'label'                 =>  __( 'Switch (default off)' ),
			    'type'                  =>  'switch',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'link', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  '',
		    ) );
		    $this->add_control( 'link', array(
			    'label'                 =>  __( 'Link' ),
			    'type'                  =>  'link',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $this->add_setting( 'icon', array(
			    'sanitize_callback'     =>  'tailor_sanitize_text',
			    'default'               =>  '',
		    ) );
		    $this->add_control( 'icon', array(
			    'label'                 =>  __( 'Icon' ),
			    'type'                  =>  'icon',
			    'section'               =>  'general',
			    'priority'              =>  $priority += 10,
		    ) );

		    $general_control_types = array();
		    $general_control_arguments = array();
		    tailor_control_presets( $this, $general_control_types, $general_control_arguments, $priority );

		    // Standard color settings..
		    $priority = 0;
		    $color_control_types = array(
			    'color',
			    'link_color',
			    'heading_color',
			    'background_color',
			    'border_color',
		    );
		    $color_control_arguments = array();
		    tailor_control_presets( $this, $color_control_types, $color_control_arguments, $priority );

		    // Standard attribute settings..
		    $priority = 0;
		    $attribute_control_types = array(
			    'class',
			    'padding',
			    'margin',
			    'border_style',
			    'border_width',
			    'border_radius',
			    'shadow',
			    'background_image',
			    'background_repeat',
			    'background_position',
			    'background_size',
		    );
		    $attribute_control_arguments = array();
		    tailor_control_presets( $this, $attribute_control_types, $attribute_control_arguments, $priority );
	    }

	    /**
	     * Returns custom CSS rules for the element.
	     *
	     * @param $atts
	     * @return array
	     */
	    public function generate_css( $atts ) {
		    $css_rules = array();
		    $excluded_control_types = array();

		    // Just generate the default setting CSS
		    $css_rules = tailor_css_presets( $css_rules, $atts, $excluded_control_types );
		    return $css_rules;
	    }
    }
}