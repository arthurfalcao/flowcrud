<!DOCTYPE html>
<html>

<head>
  <title>Localização</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <style>
    #map {
      height: 100%;
    }

    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <div id="map"></div>

  <script>
    function initMap() {
      var arthur = {
        info: '<strong>Arthur Falcão</strong><br>\
        <a href="https://goo.gl/maps/oWQ1TKUzeB22">Flow</a>',
        icon: '../_IMG/arthur.png',
        lat: -9.5962818,
        long: -35.7553214
      };

      var franklin = {
        info: '<strong>Franklin Soares</strong><br>\
        <a href="https://goo.gl/maps/xrdKW3985qT2">Flow</a>',
        icon: '../_IMG/franklin.png',
        lat: -9.5559048,
        long: -35.7662475
      };

      var joab = {
        info: '<strong>Joab Leite</strong><br>\r\
        <a href="https://goo.gl/maps/QFYhF7Dcg5E2">Flow</a>',
        icon: '../_IMG/joab.png',
        lat: -9.6465873,
        long: -35.7082588
      };

      var rodrigo = {
        info: '<strong>Rodrigo Camelo</strong><br>\r\
        <a href="https://goo.gl/maps/QYGsFy8rBf22">Flow</a>',
        icon: '../_IMG/rodrigo.png',
        lat: -9.6675037,
        long: -35.7137846
      };

      var locations = [
        [arthur.info, arthur.lat, arthur.long, arthur.icon, 0],
        [franklin.info, franklin.lat, franklin.long, franklin.icon, 1],
        [joab.info, joab.lat, joab.long, joab.icon, 2],
        [rodrigo.info, rodrigo.lat, rodrigo.long, rodrigo.icon, 3],
      ];

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: new google.maps.LatLng(-9.5962818, -35.7553214),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });

      var infowindow = new google.maps.InfoWindow({});

      var marker, i;

      for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map,
          icon: locations[i][3]
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTFf7IKwhkK35SGEEYGiqigp-V3Ne86kY&callback=initMap"></script>
</body>

</html>
