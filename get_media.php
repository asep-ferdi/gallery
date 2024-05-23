<?php
$dir = 'uploads/';
$files = array_diff(scandir($dir), array('.', '..'));
foreach ($files as $file) {
  $filePath = $dir . $file;
  $captionFile = $dir . pathinfo($filePath, PATHINFO_FILENAME) . '.txt';
  $caption = file_exists($captionFile) ? file_get_contents($captionFile) : '';
  echo '<div class="media-box" data-file="' . $filePath . '" data-caption="' . htmlspecialchars($caption) . '">';
  if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
    echo '<img src="' . $filePath . '" alt="Image">';
  } else if (preg_match('/\.(mp4|webm)$/i', $file)) {
    echo '<video controls><source src="' . $filePath . '"></video>';
  }
  echo '</div>';
}
?>
