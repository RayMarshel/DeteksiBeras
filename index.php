<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DETEKSI JENIS BERAS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">KLASIFIKASI JENIS BERAS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="upload.php">Deteksi Gambar</a></li>
                        <li class="nav-item"><a class="nav-link" href="webcam.php">Deteksi Webcam</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                    	<div class="card h-100">
                            <!-- Product image-->
                            
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Deteksi Jenis Beras Menggunakan Gambar</h5>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-success mt-auto" href="upload.php">Upload Image YOLO</a></div>
                                <br>
                                
                                 <div class="text-center"><a class="btn btn-success mt-auto" href="upload-frcnn.php">Upload Image Faster RCNN</a></div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="card h-100">
                            <!-- Product image-->
                            
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Deteksi Jenis Beras Menggunakan Webcam/Camera</h5>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-danger mt-auto" href="webcam.php">Camera / Webcam YOLO</a></div>
                                <br>
                                <div class="text-center"><a class="btn btn-danger mt-auto" href="webcam-frcnn.php">Camera / Webcam Faster RCNN</a></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br><br>
        <section class="py-5">
        	<div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-12">
                    	<div class="card h-100">
                    		<div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Hasil Training Deteksi Jenis Beras</h5>
                                    
                                </div>
                                <div class="row">
                                	<div class="col-md-6">
                                        <img src="assets/confusion-mat.PNG" class="img-fluid">
                                        <h4>Confusion Matrix</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="assets/f1-curve.PNG" class="img-fluid">
                                        <h4>F1 Curve</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="assets/p-curve.PNG" class="img-fluid">
                                        <h4>P Curve</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="assets/result.PNG" class="img-fluid">
                                        <h4>Result</h4>
                                    </div>
                                </div>
                            </div>
                    	</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<?php
	// $command = escapeshellcmd('C:/Users/LAPTOP/PycharmProjects/yolo_try/new.py');
	// $output = shell_exec($command);
	// echo $output;

	// $output = shell_exec("python C:/Users/LAPTOP/PycharmProjects/yolo_try/yolov5/detect.py");
	// echo $output;	
?>