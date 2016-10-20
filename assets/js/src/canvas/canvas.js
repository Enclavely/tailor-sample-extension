
( function( ElementAPI, SettingAPI, Views ) {

    'use strict';

	// Do something when the element renders
	ElementAPI.onRender( 'tailor_custom_wrapper', function( atts, model ) {

		// Do something with the current attributes or element model
		console.log( atts );
		console.log( model );

		// Or update the DOM (the function is scoped to the element view)
		console.log( this.el );
		console.log( this.$el );
    } );

	// Respond to an element setting change
	SettingAPI.onChange( 'element:title_background_color', function( to, from, model ) {

		// Do something with the DOM (the function is scoped to the element view)
		this.el.classList.add( 'custom-background-color' );
		this.$el.css( { 'background-color' : to } );

		// Or return a collection of custom CSS rules to apply
		return [ {
			selectors: [ '', '.selector-within-element' ],
			declarations: {
				'background-color' : to
			}
		} ];
	} );

	// Respond to a sidebar setting change
	SettingAPI.onChange( 'sidebar:setting_id', function( to, from ) {
		// Do something
	} );

	app.on( 'before:start', function() {
		// Register custom views or behavior
		// e.g., Views.CustomView = require( '..' );
	} );


} ) ( window.Tailor.Api.Element, window.Tailor.Api.Setting, Tailor.Views || {} );