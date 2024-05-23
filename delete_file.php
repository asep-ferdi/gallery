<?php
$data = json_decode(file_get_contents('php://input'), true);
$fileName = $data['name'];
$filePath = 'uploads/' . $fileName;

if (file_exists($filePath)) {
  if (unlink($filePath)) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false]);
  }
} else {
  echo json_encode(['success' => false, 'message' => 'File not found.']);
}
?>
