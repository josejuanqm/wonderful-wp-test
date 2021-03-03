<?php get_header(); ?>
<?php
  function read($file) {
    $row = 1;
    $array = array();
    if (($handle = fopen($file, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if ($row != 1) {
          $num = count($data);
          $row++;
          array_push($array, $data);
        } else {
          $row++;
        }
      }
  
      fclose($handle);
    }
    return $array;
  }
?>

<div id="map"></div>
<div id="overlay-single">
  <section class="section">
    <div class="container has-text-white">
      <h1 class="is-size-5"><b>Nice airports!</b></h1>
      <div class="url-container">
        <p>Your shareable url is: </p>
        <span>
          <?php
            echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          ?>
          <button onclick="copyToClipboard()">Copy</button>
        </span>
      </div>
    </div>
  </section>
</div>

<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeZ-9xbCGjcn4XKsx8q0FCj60vBdD9bbc&callback=initMap&libraries=&v=weekly"
  async
></script>
<script>
  function addMarkers() {
    let values = [
      <?php
        $file = get_field('file');
        $data = read($file['url']);
        if( $file ): 
          for ($i=0; $i < count($data); $i++) {
            $row = $data[$i];
            echo '{' .
              'id: "' . $row[0] . '",' .
              'name: "' . $row[1] . '",' .
              'city: "' . $row[2] . '",' .
              'country: "' . $row[3] . '",' .
              'iata: "' . $row[4] . '",' .
              'icao: "' . $row[5] . '",' .
              'lat: "' . $row[6] . '",' .
              'lng: "' . $row[7] . '",' .
              'alt: "' . $row[8] . '",' .
              'timezone: "' . $row[9] . '"' .
              '}';

            if ($i != count($data) - 1) {
              echo ',';
            }
          }
        endif;
      ?>
    ]
    
    for (let value = 0; value < 10; value++) {
      const element = values[value];
      const place = { lat: parseFloat(element.lat), lng: parseFloat(element.lng) };
      const marker = new google.maps.Marker({
        position: place,
        map: window.map
      });
      marker.setMap(window.map);
      console.log(marker);
    }
  }
</script>

<?php get_footer(); ?>