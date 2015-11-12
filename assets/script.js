(function() {
	'use strict';
	$(function() {
		$(':header').each(function(){
			$(this).html($(this).text().replace(/([A-Z])/g, '<strong>$1</strong>'));
		});
	});
}());