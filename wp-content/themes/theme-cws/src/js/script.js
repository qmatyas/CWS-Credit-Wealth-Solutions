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

/***** Google map contact *****/
cws.map = {
  init: function(){
    var geocoder;
    var map;
    function initialiserCarte() {
      geocoder = new google.maps.Geocoder();
      var latlng = new google.maps.LatLng(48.8724066,2.3346837);
      var mapOptions = {
        zoom    : 16,
        center  : latlng,
        mapTypeId : google.maps.MapTypeId.ROADMAP
      };

      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      var marker = new google.maps.Marker({
          map: map,
          position: latlng
      });
    }
    google.maps.event.addDomListener(window, 'load', initialiserCarte);
  }
};

cws.containerlg = {
	init: function(){
		if(window.matchMedia('(min-width: 1200px)').matches){
			$("section > div").removeClass('container-fluid');
			$("section > div").addClass('container');
		}
		else {
			
		}
	}
}
// window.addEventListener('resize', cws.containerlg, false);

$(document).ready(function(){
	cws.slider.init();
	cws.map.init();
	cws.containerlg.init();
});