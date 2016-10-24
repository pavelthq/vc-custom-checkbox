(function ( $ ) {
	$( function () {
		/*
		 Class used in edit form and editor models to save/render param type
		 */
		window.vc.atts.custom_checkbox = {
			/**
			 * Used to save multiple values in single string for saving/parsing/opening
			 * @param param
			 * @returns {string}
			 */
			parse: function ( param ) {
				var arr, newValue;

				arr = [];
				newValue = '';
				$( 'input[name=' + param.param_name + ']', this.content() ).each( function () {
					var self;

					self = $( this );
					if ( this.checked ) {
						arr.push( self.attr( 'value' ) );
					}
				} );
				if ( 0 < arr.length ) {
					newValue = arr.join( ',' );
				}
				return newValue;
			},
			/**
			 * Used in shortcode saving
			 * Default: '' empty (unchecked)
			 * Can be overwritten by 'std'
			 * @param param
			 * @returns {string}
			 */
			defaults: function ( param ) {
				return ''; // needed for saving - without this default value for param will be first value in array
			}
		};
	} );
})( window.jQuery );