'use strict';
var cws = {};

cws.menuxs = {
  init: function(){
    if(window.matchMedia('(min-width: 768px)').matches){
      $("nav").removeClass('navbar-xs');
      $(".dropdown-entreprise").attr("href","entreprises");
      $(".dropdown-particulier").attr("href","particuliers");
    } else {
      $("nav").addClass('navbar-xs');
      $("<br>").insertBefore('.media-top');
      $(".dropdown-toggle").attr("data-toggle", "dropdown");
    }
  }
};
window.addEventListener('resize', cws.menuxs, false);

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
  cws.menuxs.init();
  cws.slider.init();
	cws.map.init();
});