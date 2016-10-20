<?php

/**
 * Modifies default section elements.
 *
 * @param Tailor_Section_Element $section_element
 */
function tailor_modify_section( $section_element ) {

	// Get the section class name setting
	$style_setting = $section_element->get_setting( 'class' );

	$style_setting->default = 'custom-class';
}

//add_action( 'tailor_element_register_controls_tailor_section', 'tailor_modify_section' );


/**
 * Modifies default button elements.
 *
 * @param Tailor_Button_Element $button_element
 */
function tailor_modify_button( $button_element ) {

	// Get the button element's and style setting
	$style_setting = $button_element->get_setting( 'style' );

	// Set the default value to primary
	$style_setting->default = 'primary';

	// Remove the style control
	$button_element->remove_control( 'style' );
}

add_action( 'tailor_element_register_controls_tailor_button', 'tailor_modify_button' );



/**
 * Adds a new control to the Tailor button.
 *
 * @param Tailor_Button_Element $button_element
 */
function tailor_add_button_control( $button_element ) {

	$button_element->add_setting( 'show_icon', array(
		'sanitize_callback'     =>  'tailor_sanitize_text',
	) );

	$button_element->add_control( 'show_icon', array(
		'label'                 =>  __( 'Show icon?' ),
		'type'                  =>  'switch',
		'priority'              =>  45, // Position before icon control
		'section'               =>  'general',
	) );
}

add_action( 'tailor_element_register_controls_tailor_button', 'tailor_add_button_control' );



/**
 * Modify the default control arguments for the Button element.
 *
 * @param array $control_args
 * @param Tailor_Button_Element $button_element
 *
 * @return array $control_args
 */
function tailor_modify_button_icon_control( $control_args, $button_element ) {
	$control_args['dependencies'] = array(
		'show_icon'             => array(
			'condition'             =>  'not',
			'value'                 =>  '',
		),
	);
	return $control_args;
}

add_action( 'tailor_control_args_tailor_button_icon', 'tailor_modify_button_icon_control', 10, 2 );