<?php

if ( ! function_exists( 'tailor_shortcode_custom_wrapper_element' ) ) {

    /**
     * Defines the shortcode rendering function for the custom wrapper element.
     *
     * @param array $atts
     * @param string $content
     * @param string $tag
     * @return string
     */
    function tailor_shortcode_custom_wrapper_element( $atts, $content = null, $tag ) {

	    /**
	     * Filter the default shortcode attributes.
	     *
	     * @param array
	     */
	    $default_atts = apply_filters( 'tailor_shortcode_default_atts_' . $tag, array() );
	    $atts = shortcode_atts( $default_atts, $atts, $tag );
	    $html_atts = array(
		    'id'            =>  empty( $atts['id'] ) ? null : $atts['id'],
		    'class'         =>  explode( ' ', "tailor-element tailor-custom-wrapper {$atts['class']}" ),
		    'data'          =>  array(),
	    );
	    
	    // Do something with the element settings
	    $content = '';
	    if ( ! empty( $atts['title'] ) ) {
		    $content .= '<h2>' . esc_attr( $atts['title'] ) . '</h2>';
	    }
	    if ( ! empty( $atts['description'] ) ) {
		    $content .= '<p>' . esc_attr( $atts['description'] ) . '</p>';
	    }
	    
	    /**
	     * Filter the HTML attributes for the element.
	     *
	     * @param array $html_attributes
	     * @param array $atts
	     * @param string $tag
	     */
	    $html_atts = apply_filters( 'tailor_shortcode_html_attributes', $html_atts, $atts, $tag );
	    $html_atts['class'] = implode( ' ', (array) $html_atts['class'] );
	    $html_atts = tailor_get_attributes( $html_atts );

	    $outer_html = "<div {$html_atts}>%s</div>";
	    $inner_html = '<div class="tailor-custom-wrapper__content">%s</div>';
	    $html = sprintf( $outer_html, sprintf( $inner_html, $content ) );

	    /**
	     * Filter the HTML for the element.
	     *
	     * @param string $html
	     * @param string $outer_html
	     * @param string $inner_html
	     * @param string $html_atts
	     * @param array $atts
	     * @param string $content
	     * @param string $tag
	     */
	    $html = apply_filters( 'tailor_shortcode_html', $html, $outer_html, $inner_html, $html_atts, $atts, $content, $tag );

	    return $html;
    }

    add_shortcode( 'tailor_custom_wrapper', 'tailor_shortcode_custom_wrapper_element' );
}