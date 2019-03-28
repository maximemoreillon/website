<?php

function gallery($gallery_path_from_root){

  $gallery_absolute_path = $_SERVER['DOCUMENT_ROOT'].$gallery_path_from_root;

  // Get all images from directory
  $files = array_diff(scandir($gallery_absolute_path), array('.', '..'));

  echo "<div class='gallery'>";

  // for each image
  foreach ($files as $file){
    echo('<div>');
    echo('<img onclick="open_image_modal(this)" src="'.$gallery_path_from_root.'/'.$file.'">');
    echo('</div>');
  }

  echo "</div>";
}

?>
