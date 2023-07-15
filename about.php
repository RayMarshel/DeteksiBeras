<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>YOLO</title>
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
                <a class="navbar-brand" href="#!">Deteksi Jenis Beras Menggunakan Yolo</a>
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

                    <div class="col-md-12">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h1 class="fw-bolder">Deteksi Jenis Beras Menggunakan Yolo dan Faster RCNN</h1>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Pada kehidupan sehari-sehari, kebutuhan konsumsi pangan dalam bentuk tenaga yang relative mudah dipenuhi berasal dari pangan asal karbohidrat. Ketersediaan pangan asal karbohidrat pada Indonesia, menjadi perhatian primer pemerintah sampai saat ini . Beras, dari sisi konsumen, menjadi pangan sumber karbohidrat primer dengan partisipasi konsumsi hampir mencapai 100%, yang berarti hampir semua rumah tangga mengkonsumsi beras. Namun beras yang tersebar di pasaran banyak aneka jenis beras yaitu : beras pandan wangi, rojo lele, IR 64, IR 42, dan lain-lainnya.</p>
                                        <p>Sayangnya masih banyak konsumen belum mengetahui bagaimana cara membedakan jenis beras berdasarkan dari bentuk dan warna. Oleh karena itu diperlukan suatu sistem klasifikasi untuk mengetahui jenis beras dengan menerapkan metode FASTER-R CNN (Fast Region-based Convolutional Network) dan YOLO(You Only Look Once) berbasis web.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                    	<div class="card h-100">
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <h5 class="fw-bolder">Beras Basmati</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/basmati.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Beras basmati adalah beras yang sering digunakan untuk membuat nasi briyani. Manfaat beras ini sangat banyak, mulai dari mencegah penyakit jantung, hingga meningkatkan kesehatan otak. Dibandingkan dengan beras pada umumnya, beras basmati memiliki bentuk yang lebih panjang. Beras basmati yang sangat populer di negara India dan Asia Tenggara ini, terbagi dalam dua jenis, ada yang warna putih dan cokelat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-md-12">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <h5 class="fw-bolder">Beras Mentik Susu</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/mentik-susu.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Beras Mentik Susu merupakan beras khas Kecamatan Sawangan, Kabupaten Magelang. Bentuk beras ini berwarna putih susu dan bentuknya mirip dengan beras ketan. Selain rasanya yang lezat, beras Mentik Susu juga memiliki manfaat untuk menurunkan gula darah, terutama pada penderita penyakit diabetes melitus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <h5 class="fw-bolder">Beras Mentik Wangi</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/mentik-wangi.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Beras mentik wangi memiliki tekstur empuk dan pulen serta beraroma wangi jika sudah menjadi nasi dan mudah dikunyah. Beras lokal ini merupakan beras premium yang dibudidayakan secara organik</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <h5 class="fw-bolder">Beras Pandan Wangi</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/pandanwangi.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Dinamakan demikian karena ada wangi pandan yang menyertainya. Berasal dari daerah Cianjur, Jawa Barat, beras Pandan Wangi digadang-gadang sebagai yang terbaik di Indonesia sejak tahun 1970an. Rasanya yang enak dan teksturnya yang pulen sempat jadi konsumsi para menteri di awal-awal pemunculannya. Inilah mengapa ia dahulunya disebut juga sebagai “beras menteri”. Secara tampilannya, biji beras Pandan Wangi berbentuk gemuk, pendek, dan tahan rontok. Karena rasanya yang superior, maka tak heran bila varietas ini punya harga jual yang lebih tinggi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <h5 class="fw-bolder">Beras Rojolele</h5>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/rojolele.jpg" class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Kultivar padi unggulan ini berasal dari Jawa Tengah dan telah ada sejak awal tahun 2000an. Beras ini juga digunakan sebagai program persilangan di IRRI. Beras Rojolele punya bentukan bulat yang mengingatkan juga pada beras Pandan Wangi, rasanya enak dan juga wangi. Namun demikian, proses panennya yang tidak mudah dan masa simpan yang tidak lama menjadikannya beras yang dibanderol cukup mahal.</p>
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