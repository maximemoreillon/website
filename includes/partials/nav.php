<?php
function activation($in) {
  // Echoes active if $in matches first component of the path
  $directoryURI = $_SERVER['PHP_SELF'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('/', $path);
  $first_part = $components[1];

  if($first_part == $in) {
    echo 'class="active"';
  }
}
?>

<a <?php activation("index.php"); ?> href="/index.php">HOME</a>
<a <?php activation("projects"); ?> href="/projects/">PROJECTS</a>
<a <?php activation("tutorials"); ?> href="/tutorials/">TUTORIALS</a>