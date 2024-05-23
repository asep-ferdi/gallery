<?php
$dir = 'uploads/';
$files = array_diff(scandir($dir), array('.', '..'));

$fileList = [];
foreach ($files as $file) {
  $filePath = $dir . $file;
  $fileType = mime_content_type($filePath);
  if (preg_match('/^image\//', $fileType)) {
    $type = 'image';
  } else if (preg_match('/^video\//', $fileType)) {
    $type = 'video';
  } else {
    $type = 'file';
  }
  $fileList[] = ['name' => $file, 'path' => $filePath, 'type' => $type];
}

header('Content-Type: application/json');
echo json_encode($fileList);
?>
