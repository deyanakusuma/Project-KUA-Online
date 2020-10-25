<?php
session_start();
ob_start();
include 'koneksi.php';
$id = $_GET['id'];
$db=mysqli_query($conn, "SELECT * FROM laki WHERE id='$id' ");
$db1=mysqli_query($conn, "SELECT * FROM perem WHERE id='$id' ");
$db2=mysqli_query($conn, "SELECT * FROM ortufem WHERE id='$id' ");
$db3=mysqli_query($conn, "SELECT * FROM ortuofem_pr WHERE id='$id' ");
$laki = mysqli_fetch_array($db);
$perem = mysqli_fetch_array($db1);
$ortuman = mysqli_fetch_array($db2);
$ortufem = mysqli_fetch_array($db3);
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
echo "<h4>"."N5"."</h4>";
echo '<br>';
echo "<h1>"."SURAT IZIN ORANG TUA"."</h1>";
echo '<hr>';
echo "<h4>"."Nomor : ".$id."</h4>";
echo '<br>';
echo "<h4>"."Yang bertanda tangan di bawah ini : "."</h4>";
echo '<table border="0">
  <tr>
    <td width="250"><h4>1. Nama lengkap atau alias</h4></td>
    <td width="30"><h4>:</h4></td>
    <td width="250"><h4>'.$ortuman['nama_ofem'].'</h4></td>
  </tr>
  <tr>
    <td><h4>2. Tempat tanggal lahir</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortuman['ttl_ofem'].'</h4></td>
  </tr>
  <tr>
    <td><h4>3. Warga Negara</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortuman['warga_ofem'].'</h4></td>
  </tr>
   <tr>
    <td><h4>4. Agama</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortuman['agama_ofem'].'</h4></td>
  </tr>
  <tr>
    <td><h4>5. Pekerjaan</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortuman['kerja_ofem'].'</h4></td>
  </tr>
  <tr>
    <td><h4>6. Tempat Tinggal</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortuman['tinggal_ofem'].'</h4></td>
  </tr>
  </table>';
echo "<h4>"."dengan seorang wanita : "."</h4>";
echo '<table border="0">
  <tr>
    <td width="250"><h4>1. Nama lengkap atau alias</h4></td>
    <td width="30"><h4>:</h4></td>
    <td width="250"><h4>'.$ortufem['nama_ofempr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>2. Tempat tanggal lahir</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortufem['ttl_ofempr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>3. Warga Negara</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortufem['warga_ofempr'].'</h4></td>
  </tr>
   <tr>
    <td><h4>4. Agama</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortufem['agama_ofempr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>5. Pekerjaan</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortufem['kerja_ofempr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>6. Tempat Tinggal</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$ortufem['tinggal_ofempr'].'</h4></td>
  </tr>
</table>';
echo "<h4>"."adalah ayah kandung dan ibu kandung dari : "."</h4>";
echo '<table border="0">
  <tr>
    <td width="250"><h4>1. Nama lengkap atau alias</h4></td>
    <td width="30"><h4>:</h4></td>
    <td width="250"><h4>'.$perem['namapr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>2. Tempat tanggal lahir</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['ttl_pr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>3. Warga Negara</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['wargapr'].'</h4></td>
  </tr>
   <tr>
    <td><h4>4. Agama</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['agamapr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>5. Pekerjaan</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['kerjapr'].'</h4></td>
  </tr>
  <tr>
    <td><h4>6. Tempat Tinggal</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$perem['tinggalpr'].'</h4></td>
  </tr>
  </table>';
echo "<h4>"."memberikan izin kepadanya untuk melakukan pernikahan dengan : "."</h4>";
echo '<table border="0">
  <tr>
    <td width="250"><h4>1. Nama lengkap atau alias</h4></td>
    <td width="30"><h4>:</h4></td>
    <td width="250"><h4>'.$laki['namalk'].'</h4></td>
  </tr>
  <tr>
    <td><h4>2. Tempat tanggal lahir</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$laki['ttl_lk'].'</h4></td>
  </tr>
  <tr>
    <td><h4>3. Warga Negara</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$laki['wargalk'].'</h4></td>
  </tr>
   <tr>
    <td><h4>4. Agama</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$laki['agamalk'].'</h4></td>
  </tr>
  <tr>
    <td><h4>5. Pekerjaan</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$laki['kerjalk'].'</h4></td>
  </tr>
  <tr>
    <td><h4>6. Tempat Tinggal</h4></td>
    <td><h4>:</h4></td>
    <td><h4>'.$laki['tinggallk'].'</h4></td>
  </tr>
  </table>';
echo "<h4>"."Demikianlah surat izin ini dibuat dengan kesadaran tanpa ada paksaan dari siapapun juga dan untuk dipergunakan seperlunya."."</h4>";
echo "<h4>"."..................,20.."."</h4>";
echo "<h4>"."I. Ayah"."</h4>";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo "...................................";
    echo "<h4>"."II. Ibu"."</h4>";
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