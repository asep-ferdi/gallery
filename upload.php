<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = 'uploads/';
    $caption = $_POST['caption'];
    $files = $_FILES['files'];
    $fileCount = count($files['name']);
    
    for ($i = 0; $i < $fileCount; $i++) {
        $fileName = basename($files['name'][$i]);
        $targetFilePath = $uploadDir . $fileName;
        
        if (move_uploaded_file($files['tmp_name'][$i], $targetFilePath)) {
            $captionFile = $uploadDir . pathinfo($fileName, PATHINFO_FILENAME) . '.txt';
            file_put_contents($captionFile, $caption);
        } else {
            echo 'Gagal mengunggah file: ' . $fileName . '<br>';
        }
    }
    
    header('Location: index.php');
}
?>
