<?php
	// $command = escapeshellcmd('C:/Users/LAPTOP/PycharmProjects/yolo_try/new.py');
	// $output = shell_exec($command);
	// echo $output;
ini_set('max_execution_time', 300);

$output = shell_exec("python C:/Users/rayat/pythonProject/yolo_try/yolov5/detect.py");
echo "Berhasil hore";
header("location: hasil.php");	

?>