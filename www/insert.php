<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $sertifikasi=$_POST['sertifikasi'];
 $q=mysqli_query($con,"INSERT INTO 'peserta' ('nim','nama','sertifikasi') VALUES ('$nim','$nama','$sertifikasi')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
