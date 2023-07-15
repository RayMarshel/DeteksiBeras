<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Faster RCNN</title>
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
                <a class="navbar-brand" href="#!">Deteksi Jenis Beras Menggunakan Faster RCNN</a>
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
        <?php
        $dir = 'hasil';
        $b = scandir($dir,1);
        $boom = $b['0'];

        $dir2 = 'hasil/'.$boom.'/labels/deteksi.txt';
        $fh = fopen($dir2,'r');
        while ($line = fgets($fh)) {
            // echo($line);
            // echo substr($line,0,1);
            $jb = substr($line,0,1);
        }
        fclose($fh);

        if ($jb == "0") {
            $jenis = "Basmati";
        }elseif ($jb == "1") {
            $jenis = "Mentik Susu";
        }elseif ($jb == "2") {
            $jenis = "Mentik Wangi";
        }elseif ($jb == "3") {
            $jenis = "Pandan Wangi";
        }elseif ($jb == "4") {
            $jenis = "Rojolele";
        }
        ?>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                    	<div class="card h-100 p-4">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <!-- <h5 class="fw-bolder">Jenis Beras: <?php echo $jenis; ?></h5> -->
                                </div>
                            </div>
                            <img src="data/deteksi.jpg" id="image" name="image" style="min-height:416;min-width:416;max-height:640px;">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="card h-100">
                            <img src="hasil-frcnn/prediksi.jpg" id="image" name="image" style="min-height:416;min-width:416;max-height:640px;">
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

