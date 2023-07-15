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
    <script type="text/javascript" src="js/webcam.js"></script>
    <script language="JavaScript">
    function take_snapshot() {
        Webcam.snap(function(data_uri) {
        document.getElementById('results').innerHTML = '<img id="base64image" src="'+data_uri+'"/><button onclick="SaveSnap();">Save Snap</button>';
    });
    }
    function ShowCam(){
    Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 100
    });
    Webcam.attach('#my_camera');
    }
    function SaveSnap(){
        document.getElementById("loading").innerHTML="Saving, please wait...";
        var file =  document.getElementById("base64image").src;
        var formdata = new FormData();
        formdata.append("base64image", file);
        var ajax = new XMLHttpRequest();
        ajax.addEventListener("load", function(event) { uploadcomplete(event);}, false);
        ajax.open("POST", "upload-webcam.php");
        ajax.send(formdata);
    }
    function uploadcomplete(event){
        document.getElementById("loading").innerHTML="";
        var image_return=event.target.responseText;
        var showup=document.getElementById("uploaded").src=image_return;
    }
    window.onload= ShowCam;
    </script>
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
                    <div class="col-md-6">
                        <div class="card h-100 p-4">
                            
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Deteksi Jenis Beras Menggunakan Gambar</h5>
                                    
                                </div>
                            </div>
                            <div id="my_camera"></div>
                            <form>
                                <input type="button" value="Snap It" onClick="take_snapshot()">
                            </form>
                            <div class="container" id="Prev">
                                <b>Snap Preview...</b><div id="results"></div>
                            </div>
                            
                            <!-- <form action="upload.php" method="post" enctype="multipart/form-data">  
                               <input type="file" accept="image/*" capture=camera>  
                               <input type="submit" value="Upload">  
                            </form> -->
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <a href="deteksi-proses.php"><button>Deteksi</button></a>
                            <div class="container" id="Saved">
                                <span id="loading"></span><img id="uploaded" src=""/>
                            </div>
                            <!-- <img id="image" name="image" style="min-height:416;min-width:416;max-height:640px;">

                            <iframe id="iframe" style="display:none;" name="iframe"></iframe> -->

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

