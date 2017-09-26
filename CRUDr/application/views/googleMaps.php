<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">

var map;
function initMap() {
    
    map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 4.676310, lng: -73.6963},
    zoom: 4  
  });
    
    <?php foreach ($google as $infoGoogle){?>
     
      
  
  var pais = {lat:<?php echo $infoGoogle['latitud']; ?>, lng:<?php echo $infoGoogle['longitud']; ?>};
  //marcador
  var marker<?php echo $infoGoogle['ID']; ?> = new google.maps.Marker({
    position: pais,
    map: map,
    title: '<?php echo $infoGoogle['nombre']?>!'
  });
  //ventanas de informacion 
  var Contenido= '<?php echo $infoGoogle['nombre']?>'+'<pre>oeeee mano</pre>';
  var infowindow<?php echo $infoGoogle['ID']?> = new google.maps.InfoWindow({
    content: Contenido
  });

  marker<?php echo $infoGoogle['ID']; ?>.addListener('click', function() {
    infowindow<?php echo $infoGoogle['ID']?>.open(map, marker<?php echo $infoGoogle['ID']; ?>);
  });
  <?php } ?>
}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT9IomwALrEivH3102HRk3K1k6sHxeJU0&callback=initMap">
    </script>
  </body>
</html>