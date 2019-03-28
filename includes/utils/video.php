<?php
function video($video_url){

  echo '<div class="video_wrapper">';
  echo '<iframe allowfullscreen="" frameborder="0" src="'.$video_url.'" ></iframe>';
  echo '</div>';

}
?>
