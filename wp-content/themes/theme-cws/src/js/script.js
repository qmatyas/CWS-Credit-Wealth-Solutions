'use strict';
var cws = {};


// cws.containerlg = {
//   init: function(){
//     if(window.matchMedia('(min-width: 1500px)').matches){
//       $("section > div").removeClass('container-fluid').addClass('container');
//     }
//     else {
//       $("section > div").removeClass('container');
//     }
//   }
// };
// window.addEventListener('resize', cws.containerlg, false);


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
$(document).ready(function(){
	// cws.containerlg.init();
  cws.slider.init();
	cws.map.init();
});