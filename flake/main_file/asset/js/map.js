   (function($) {
           google.maps.event.addDomListener(window, 'load', init);

           function init() {
               var mapElement = document.getElementById('map');
               var mapData = $('#map').data('map-options');
               var mapOptions = {
                   zoom: 10,
                   scrollwheel: false,

                   //location latlng
                   center: new google.maps.LatLng(40.6700, -73.9400), // New York


                   styles: [{
                       "featureType": "water",
                       "elementType": "geometry",
                       "stylers": [{
                           "color": "#e9e9e9"
                       }, {
                           "lightness": 17
                       }]
                   }, {
                       "featureType": "landscape",
                       "elementType": "geometry",
                       "stylers": [{
                           "color": "#f5f5f5"
                       }, {
                           "lightness": 20
                       }]
                   }, {
                       "featureType": "road.highway",
                       "elementType": "geometry.fill",
                       "stylers": [{
                           "color": "#ffffff"
                       }, {
                           "lightness": 17
                       }]
                   }, {
                       "featureType": "road.highway",
                       "elementType": "geometry.stroke",
                       "stylers": [{
                           "color": "#ffffff"
                       }, {
                           "lightness": 29
                       }, {
                           "weight": 0.2
                       }]
                   }, {
                       "featureType": "road.arterial",
                       "elementType": "geometry",
                       "stylers": [{
                           "color": "#ffffff"
                       }, {
                           "lightness": 18
                       }]
                   }, {
                       "featureType": "road.local",
                       "elementType": "geometry",
                       "stylers": [{
                           "color": "#ffffff"
                       }, {
                           "lightness": 16
                       }]
                   }, {
                       "featureType": "poi",
                       "elementType": "geometry",
                       "stylers": [{
                           "color": "#f5f5f5"
                       }, {
                           "lightness": 21
                       }]
                   }, {
                       "featureType": "poi.park",
                       "elementType": "geometry",
                       "stylers": [{
                           "color": "#dedede"
                       }, {
                           "lightness": 21
                       }]
                   }, {
                       "elementType": "labels.text.stroke",
                       "stylers": [{
                           "visibility": "on"
                       }, {
                           "color": "#ffffff"
                       }, {
                           "lightness": 16
                       }]
                   }, {
                       "elementType": "labels.text.fill",
                       "stylers": [{
                           "saturation": 36
                       }, {
                           "color": "#333333"
                       }, {
                           "lightness": 40
                       }]
                   }, {
                       "elementType": "labels.icon",
                       "stylers": [{
                           "visibility": "off"
                       }]
                   }, {
                       "featureType": "transit",
                       "elementType": "geometry",
                       "stylers": [{
                           "color": "#f2f2f2"
                       }, {
                           "lightness": 19
                       }]
                   }, {
                       "featureType": "administrative",
                       "elementType": "geometry.fill",
                       "stylers": [{
                           "color": "#fefefe"
                       }, {
                           "lightness": 20
                       }]
                   }, {
                       "featureType": "administrative",
                       "elementType": "geometry.stroke",
                       "stylers": [{
                           "color": "#fefefe"
                       }, {
                           "lightness": 17
                       }, {
                           "weight": 1.2
                       }]
                   }]
               };
               var map = new google.maps.Map(mapElement, mapOptions);

               var contentString = '<div id="map-content">' + '<div id="bodyContent">' +
                   '<p> <span class="map-info-icon"><i class="ti-location-pin"></i></span> <span class="map-info-content">28 Green Tower, Street Name </br> ' + ' New York City, USA </span></p> ' + '<p> <span class="map-info-icon"><i class="ti-headphone-alt"></i></span> <span> +880044 545 989 626</span> </p> ' + '</div>' + '</div>';

               var infowindow = new google.maps.InfoWindow({
                   content: contentString,
               });

               // Let's also add a marker while we're at it
               var marker = new google.maps.Marker({
                   position: map.getCenter(),
                   icon: 'asset/img/icons/map-marker-icon.png',
                   map: map,
                   title: '28 Green Tower, Street Name, New York City, USA'
               });
               infowindow.open(map, marker);

           }

       }

   )(jQuery)