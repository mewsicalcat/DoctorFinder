<?
echo "Hello ". $_POST["firstname"]. " " . $_POST["lastname"] . "!<br>"; 
echo "Zip code: " . $_POST["zipcode"] . "<br>"; 
$zipcode = $_POST["zipcode"]; 
echo "Specialty: " .$_POST["specialty"] . "<br>"; 
$dbhost = 'dbase.cs.jhu.edu:3306';
$dbuser = '415_12_jyoung73';
$dbpass = 'societal!Vanward';
$conn = mysql_connect($dbhost, $dbuser, $dbpass); 

if (!$conn) {
  die('Could not connect to dbhost: ' . mysql_error()); 
}
else {
  echo "Connected to dhost dbase.cs.jhu.edu <br>"; 
}

$dbname = 'cs41512_docdb_db'; 
$db_selected = mysql_select_db($dbname, $conn);
if (!$db_selected) {
die('Could not connect to cs41512_docdb_db' . mysql_error()); 
}
else {
echo "Connected to cs41512_docdb_db <br>"; 
}

$query = 'SELECT * FROM Doctors'; 
$result = mysql_query($query);

while($row = mysql_fetch_array($result)) {
printf("Doc name: %s", $row["DFName"]); 
}

mysql_close($conn);

?>
<html> 
<head>
<title> Welcome to the Doctor Finder!</title> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <style>
      body {
        margin: 20px;
        font-family: courier, sans-serif;
        font-size: 12px;
      }
      #map {
        height: 480px;
        width: 640px;
        border: solid thin #333;
        margin-top: 20px;
      }
    </style>
<script type="text/javascript">
	var zipcode = <?php echo json_encode($zipcode); ?>; 
</script>
    <script>

      var map;
      var geocoder;
      var bounds = new google.maps.LatLngBounds();
      var markersArray = [];

var origin1 = zipcode;
var destinationA = '3400 N. Charles St., Baltimore, MD 21218';


      var destinationIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=D|FF0000|000000';
      var originIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=O|FFFF00|000000';

      function initialize() {
        var opts = {
          center: new google.maps.LatLng(55.53, 9.4),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map'), opts);
        geocoder = new google.maps.Geocoder();
      }

      function calculateDistances() {
        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix(
          {
            origins: [origin1],
            destinations: [destinationA],
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: google.maps.UnitSystem.METRIC,
            avoidHighways: false,
            avoidTolls: false
          }, callback);
      }

      function callback(response, status) {
        if (status != google.maps.DistanceMatrixStatus.OK) {
          alert('Error was: ' + status);
        } else {
          var origins = response.originAddresses;
          var destinations = response.destinationAddresses;
          var outputDiv = document.getElementById('outputDiv');
          outputDiv.innerHTML = '';
          deleteOverlays();

          for (var i = 0; i < origins.length; i++) {
            var results = response.rows[i].elements;
            addMarker(origins[i], false);
            for (var j = 0; j < results.length; j++) {
              addMarker(destinations[j], true);
              outputDiv.innerHTML += origins[i] + ' to ' + destinations[j]
                  + ': ' + results[j].distance.text + ' in '
                  + results[j].duration.text + '<br>';
            }
          }
        }
      }

      function addMarker(location, isDestination) {
        var icon;
        if (isDestination) {
          icon = destinationIcon;
        } else {
          icon = originIcon;
        }
        geocoder.geocode({'address': location}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            bounds.extend(results[0].geometry.location);
            map.fitBounds(bounds);
            var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location,
              icon: icon
            });
            markersArray.push(marker);
          } else {
            alert('Geocode was not successful for the following reason: '
              + status);
          }
        });
      }

      function deleteOverlays() {
        if (markersArray) {
          for (i in markersArray) {
            markersArray[i].setMap(null);
          }
          markersArray.length = 0;
        }
      }

    </script>
</head> 
<body onload="initialize()">
    <div id="inputs">
      <pre class="prettyprint">
	var origin1 = 'Washington DC';
var destinationA = '3400 N. Charles St. Baltimore, MD 21218';
      </pre>
      <p><button type="button" onclick="calculateDistances();">Calculate
        distances</button></p>
    </div>
    <div id="outputDiv"></div>
    <div id="map"></div>
  </body>
</html>