<?php
define('UPLOAD_DIR', 'data/');
$img = $_POST['base64image'];
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR . 'deteksi.jpg';
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
?>