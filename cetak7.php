<?php
session_start();
ob_start();
include 'koneksi.php';
$id = $_GET['id'];
$db=mysqli_query($conn, "SELECT * FROM verif1 WHERE id='$id' ");
$db1=mysqli_query($conn, "SELECT * FROM laki WHERE id='$id' ");
$db2=mysqli_query($conn, "SELECT * FROM perem WHERE id='$id' ");
$db3=mysqli_query($conn, "SELECT * FROM verif2 WHERE id='$id' ");
$verif1 = mysqli_fetch_array($db);
$laki = mysqli_fetch_array($db1);
$perem = mysqli_fetch_array($db2);
$verif2 = mysqli_fetch_array($db3);
$id = $verif1['id'];

?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $id; ?></title>
</head>
<body>
<?php
//echo "<h1>".$id."</h1>"; 
echo "<h4>"."N7"."</h4>";
echo '<br>';
echo "<h4>"."Lampiran : ....lembar"."</h4>";
echo "<h4>"."Perihal : Pemberitahuan Kehendak Nikah"."</h4>";
echo "<h4>".".......................,20.."."</h4>";
echo "<h4>"."Kepada Yth."."</h4>";
echo "<h4>"."Pegawai pencatat nikah pada KUA Kecamatan/Pembantu PPN"."</h4>";
echo "<h4>"."di ".$verif1['kecamatan']."</h4>";
echo '<br>';
echo "<h4>"."Assalamualaikum wr.wb."."</h4>";
echo "<h4>"."Dengan ini kami memberitahukan bahwa kami bermaksud akan melangsungkan pernikahan antara ".$laki['namalk']." dengan ".$perem['namapr']." pada hari ".$verif2['hari']." tanggal ".$verif2['tgl']." jam
".$verif2['jam']." dengan mas kawin ".$verif2['maskawin']." dibayar ".$verif2['dibayar']." bertempat di ".$verif2['lokasi']."."."</h4>";
echo "<h4>"."Bersama ini kami lampirkan surat-surat yang diperlukan untuk diperiksa, sebagai berikut : "."</h4>";
echo "<h4>"."1. Surat Keterangan Untuk Nikah *model N1"."</h4>";
echo "<h4>"."2. Surat Keterangan Asal Usul *model N2"."</h4>";
echo "<h4>"."3. Surat Persetujuan Mempelai *model N3"."</h4>";
echo "<h4>"."4. Surat Keterangan Tentang Orang Tua *model N4"."</h4>";
echo "<h4>"."5. *) Surat Ijin Orang Tua *model N5"."</h4>";
echo "<h4>"."6. *) Surat Keterangan Kematian Suami/Istri *model N6"."</h4>";
echo "<h4>"."7. ................................................"."</h4>";
echo "<h4>"."8. ................................................"."</h4>";
echo "<h4>"."9. ................................................"."</h4>";
echo "<h4>"."10. ................................................"."</h4>";
echo "<h4>"."Hanya dapat dihadiri dan dicatat pelaksanaannya sesuai dengan ketentuan perundang-undangan yang berlaku."."</h4>";
echo "<h4>"."Wassalam"."</h4>";
echo "<h4>"."Diterima tanggal ............................"."</h4>";
echo "<h4>"."Yang memberitahukan,"."</h4>";
echo "<h4>"."Calon mempelai/wali/wakil wali*)"."</h4>";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "...................................";
echo '<br>';
echo "<h4>"."Yang menerima,"."</h4>";
echo "<h4>"."PPN / Pembantu PPN*)"."</h4>";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "...................................";
?>
</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="n-".$id.".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
 require_once('html2pdf/html2pdf/html2pdf.class.php');
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15');
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>