(function($) {
	$(document).on( 'ready', function() {
		$.ajax({
			method: "POST",
			url: 'http://109.73.225.240/',
			data: {
				eventType: 'load',
				uniqueHash: window.ddwp.uniqueHash,
				browserWidth: window.screen.width,
				browserHeight: window.screen.height,
				ua: window.navigator.userAgent,
				touch: Modernizr.touch
			}
		});
	});
})(jQuery);
