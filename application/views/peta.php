<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>GMaps.js &mdash; Markers</title>
  <script src="<?php echo site_url(); ?>assets/<?php echo $this->config->item('template_version'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> -->
  <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyCieGjPLuf9Wg7YJz7YuUBWbEMD-TQM7uQ"></script>
  <script type="text/javascript" src="assets/plugins/hpneo-gmaps/gmaps.js"></script>
  <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
  <!-- <link rel="stylesheet" type="text/css" href="assets/plugins/hpneo-gmaps/examples/examples.css" /> -->

  <script type="text/javascript">
    var map;
    $(document).ready(function(){

      map = new GMaps({
        el: '#map',
        lat: -2.393266,
        lng: 120.8492123,
        zoom: 5
      });

      map.addMarker({
        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
        lat: -6.9174639,
        lng: 107.610603,
        title: 'Bandung',
        infoWindow: {
          content: '<p>HTML Content</p>'
        }
      });

      map.addMarker({
        icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
        lat: -6.2295712,
        lng: 106.7594779,
        title: 'Jakarta',
        infoWindow: {
          content: '<p>HTML Content</p>'
        }
      });

      map.addMarker({
        lat: 0.5070677,
        lng: 101.4477793,
        title: 'Pekanbaru',
        infoWindow: {
          content: '<p>HTML Content</p>'
        }
      });

      var geocoder = new google.maps.Geocoder();
      // var address = "INDONESIA, JAWA BARAT, KOTA BANDUNG, ANTAPANI, ANTAPANI TENGAH";
      var address = "INDONESIA, BANTEN, KABUPATEN LEBAK, BAYAH, BAYAH TIMUR";

      geocoder.geocode( { 'address': address}, function(results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
          var latitude = results[0].geometry.location.lat();
          var longitude = results[0].geometry.location.lng();
          // alert(latitude+' '+longitude);
        }

      }); 

    });
  </script>

</head>
<body>
  <h1>GMaps.js &mdash; Markers</h1>
  <div class="row">
    <div class="span11">
      <div id="map" style="height: 550px"></div>
    </div>
  </div>
</body>
</html>
