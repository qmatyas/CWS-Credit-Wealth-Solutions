'use strict';
var cws = {};

cws.slider = {
	init: function(){
		$('.single-item').slick({
			arrows: true,
      		fade: true,
      		dots: false
		});
	}
};

$(document).ready(function(){
	cws.slider.init();
});