<?php
session_start();
ob_start();
include 'koneksi.php';
$id = $_GET['id'];
$db=mysqli_query($conn, "SELECT * FROM perem WHERE id='$id' ");
$db1=mysqli_query($conn, "SELECT * FROM ortufem WHERE id='$id' ");
$db3=mysqli_query($conn, "SELECT * FROM verif1 WHERE id='$id' ");
$perem = mysqli_fetch_array($db);
$ortumanpr = mysqli_fetch_array($db1);
$verif1 = mysqli_fetch_array($db3);
$id = $perem['id'];

?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $id; ?></title>
</head>
<body>
<?php
//echo "<h1>".$id."</h1>"; 
echo "<h4>"."N1"."</h4>";
echo '<br>';
echo '<table>
  <tr>
    <td width="250"><h4>KANTOR DESA / KELURAHAN</h4></td>
    <td width="30"><h4>:</h4></td>
    <td width="150"><h4>'.$verif1['kelurahan'].'</h4></td>
  </tr>
  <tr>
    <td width="250"><h4>KECAMATAN</h4></td>
    <td width="30"><h4>:</h4></td>
    <td width="150"><h4>'.$verif1['kecamatan'].'</h4></td>
  </tr>
  <tr>
    <td width="250"><h4>KABUPATEN / KOTA</h4></td>
    <td width="30"><h4>:</h4></td>
    <td width="150"><h4>'.$verif1['kota'].'</h4></td>
  </tr>
  </table>';
echo '<br>';
echo "<h1>"."SURAT KETERANGAN ASAL USUL"."</h1>";
echo '<hr>';
echo "<h4>"."Nomor : ".$id."</h4>";
echo '<br>';
echo "<h4>"."Yang bertanda tangan di bawah ini menerangkan dengan sesungguhnya bahwa : "."</h4>";
echo '<table border="0">
  <tr>
    <td width="250"><h4>1. Nama lengkap atau alias</h4></td>
    <td width="30"><h4>:</h4></td>
    <td width="250"><h4>'.$perem['namapr'].'</h4></td>
  </tr>
  <tr>
    <td width="250"><h4>2. Jenis Kelamin</h4></td>
    <td width="30"><h4>:</h4></td>
    <td width="250"><h4>'.$perem['jenispr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>3. Tempat tanggal lahir</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['ttl_pr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>4. Warga Negara</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['wargapr'].'</h4></td>
  </tr>
   <tr>
    <td><h4>5. Agama</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['agamapr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>6. Pekerjaan</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['kerjapr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>7. Tempat Tinggal</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['tinggalpr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>8. Bin / Binti</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortumanpr['nama_ofem'].'</h4></td>
  </tr>
  <tr>
    <td><h4>9. Status Perkawinan</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['statuspr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>10. Nama Suami Terdahulu</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['suamilama'].'</h4></td>
  </tr>
  </table>';
echo "<h4>"."Demikianlah surat ini dibuat dengan mengingat sumpah jabatan dan digunakan seperlunya."."</h4>";
echo "<h4>"."......,.................."."</h4>";
echo "<h4>"."Kepala Desa/Kelurahan ".$verif1['kelurahan']."</h4>";
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