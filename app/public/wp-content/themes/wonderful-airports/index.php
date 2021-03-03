<?php get_header(); ?>

<div id="map"></div>
<div id="overlay">
  <section class="section">
    <div class="container has-text-white">
      <h1 class="is-size-3">Share your favorite airports!</h1>
      <h3 class="is-size-7">Upload a CSV document with your favorite airports. We’ll put them on a map, and provide a shareable url.</h3>
      <div class="dropzone">
        <form id="form" action="<?php echo get_stylesheet_directory_uri() ?>/upload.php" method="post" enctype="multipart/form-data">
          <input onchange="fileSelected()" type="file" name="file" id="file" hidden>
          <label for="file" id="file-label">Select file</label>
          <p>Drag and drop a CSV file, or select one from your computer.</p>
        </form>
      </div>
    </div>
  </section>
</div>

<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeZ-9xbCGjcn4XKsx8q0FCj60vBdD9bbc&callback=initMap&libraries=&v=weekly"
  async
></script>

<?php get_footer(); ?>