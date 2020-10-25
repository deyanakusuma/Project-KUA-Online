<!DOCTYPE html>
<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $query = mysqli_query($conn, "INSERT INTO ortufem (nama_ofem, ttl_ofem, warga_ofem, agama_ofem, kerja_ofem, tinggal_ofem) VALUES ('$_POST[nama_ofem]', '$_POST[ttl_ofem]', '$_POST[warga_ofem]', '$_POST[agama_ofem]', '$_POST[kerja_ofem]', '$_POST[tinggal_ofem]')");
        
        if($query){
            echo '
            <script>
                alert("Berhasil");
                window.location = ofem.php;
            </script>
            ';
        } else {
            echo '
            <script>
                alert("Gagal, ulangi");
                window.location = ofem.php;
            </script>
            ';
        }
    }
?>

<html lang="en">
<head>
	<title>NIKAH KUY</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Father's Biodata (Parent)</h2>
				<div class="page-links">
					<a href="femkate.php">Back</a>
					<a href="#"><span>Father's Biodata</span></a>
                    <a href="ofem_pr.php">Mother's Biodata</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->
    
    <!-- Contact section -->
	<div class="spad fix">
		<div class="container">
			<div class="row">
				<div class="col-md-12 coll-pul">
					<form class="form-class" id="con_form" action="#" method="post">
						<div class="row">
							<div class="col-sm-12">
                                <label for="nama_ofem">Nama Lengkap</label>
								<input type="text" name="nama_ofem" placeholder="Nama Lengkap">
							</div>
							<div class="col-sm-12">
								<label for="ttl_ofem">Tempat, Tanggal Lahir</label>
								<input type="text" name="ttl_ofem" placeholder="Tempat, Tanggal Lahir">
                            </div> 
                            <div class="col-sm-12">
								<label for="warga_ofem">Kewarganegaraan</label>
								<input type="text" name="warga_ofem" placeholder="Kewarganegaraan">
                            </div>
                            <div class="col-sm-12">
								<label for="agama_ofem">Agama</label>
								<input type="text" name="agama_ofem" placeholder="Agama">
                            </div>
                            <div class="col-sm-12">
								<label for="kerja_ofem">Pekerjaan</label>
								<input type="text" name="kerja_ofem" placeholder="Pekerjaan">
                            </div>
                            <div class="col-sm-12">
								<label for="tinggal_ofem">Tempat Tinggal</label>
								<input type="text" name="tinggal_ofem" placeholder="Tempat Tinggal Saat Ini">
                            </div>
                            <div class="col-sm-12">
                                <button class="site-btn" name="submit">Submit</button>
                            </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->

	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2018 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Deyana Kusuma W (2110161015)</a></h2>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
