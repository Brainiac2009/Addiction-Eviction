( function( api ) {

	// Extends our custom "wine-shop" section.
	api.sectionConstructor['wine-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );