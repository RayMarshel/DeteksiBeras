<?php
	// $command = escapeshellcmd('C:/Users/LAPTOP/PycharmProjects/yolo_try/new.py');
	// $output = shell_exec($command);
	// echo $output;
ini_set('max_execution_time', 300);
// $output = shell_exec("python C:/Users/LAPTOP/PycharmProjects/yolo_try/yolov5/detect.py");
// python inference.py --input example_test_data/deteksi.jpg --weights outputs/training/custom_training/last_model_state.pth
$output = shell_exec("python C:/Users/rayat/pythonProject/yolo_try/fasterrcnn-pytorch-training-pipeline/inference.py --input C:/xampp/htdocs/yolo_try/data/deteksi.jpg --weights C:/Users/rayat/pythonProject/yolo_try/fasterrcnn-pytorch-training-pipeline/outputs/training/custom_training/last_model_state.pth");
echo "Berhasil hore";
header("location: hasil-frcnn.php");	

?>