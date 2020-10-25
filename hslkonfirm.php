<?php 
    include 'koneksi.php'; 
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
				<h2>Verification Thp. Two's</h2>
				<div class="page-links">
					<a href="index.php">Home</a>
					<a href="verif1.php"><span>Verif One</span></a>
                    <a href="verif2.php"><span>Verif Two</span></a>
                    <a href="#"><span>Result</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->
    
    <!-- Contact section -->
	<div class="spad fix">
		<div class="container">
			<div class="row">
				<form class="form-class" method="post">
                    <?php
						$db=mysqli_query($conn, "SELECT * FROM laki");
                        while($data = mysqli_fetch_array($db)){
                    ?>
                    <tr>
                        <td>Nomor : <?php echo $data['id']; ?></td> 
                        <br>
                        <td><a href="cetak.php?id=<?php echo $data['id']; ?>" ?>SURAT KETERANGAN UNTUK NIKAH (Calon Suami)</a></td><br>
                        <td><a href="cetak_fem.php?id=<?php echo $data['id']; ?>" ?>SURAT KETERANGAN UNTUK NIKAH (Calon Istri)</a></td><br>
                        <td><a href="cetak2.php?id=<?php echo $data['id']; ?>" ?>SURAT KETERANGAN ASAL USUL (Calon Suami)</a></td><br>
                        <td><a href="cetak2_fem.php?id=<?php echo $data['id']; ?>" ?>SURAT KETERANGAN ASAL USUL (Calon Istri)</a></td><br>
                        <td><a href="cetak3.php?id=<?php echo $data['id']; ?>" ?>SURAT PERSETUJUAN MEMPELAI</a></td><br>
                        <td><a href="cetak4.php?id=<?php echo $data['id']; ?>" ?>SURAT KETERANGAN TENTANG ORANG TUA (Calon Suami)</a></td><br>
                        <td><a href="cetak4_fem.php?id=<?php echo $data['id']; ?>" ?>SURAT KETERANGAN TENTANG ORANG TUA (Calon Istri)</a></td><br>
                        <td><a href="cetak5.php?id=<?php echo $data['id']; ?>" ?>SURAT IZIN ORANG TUA (Calon Suami)</a></td><br>
                        <td><a href="cetak5_fem.php?id=<?php echo $data['id']; ?>" ?>SURAT IZIN ORANG TUA (Calon Istri)</a></td><br>
                        <td><a href="cetak6.php?id=<?php echo $data['id']; ?>" ?>SURAT KETERANGAN KEMATIAN ISTRI TERDAHULU (Calon Suami)</a></td><br>
                        <td><a href="cetak6_fem.php?id=<?php echo $data['id']; ?>" ?>SURAT KETERANGAN KEMATIAN SUAMI TERDAHULU (Calon Istri)</a></td><br>
                        <td><a href="cetak7.php?id=<?php echo $data['id']; ?>" ?>SURAT KETERANGAN MODEL N7</a></td><br>
                        <br>
                        <br>
                    </tr>
                    <?php } ?>
				</form>
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
