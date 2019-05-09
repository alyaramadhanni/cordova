<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_peserta=$_POST['id_peserta'];
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $sertifikasi=$_POST['sertifikasi'];
 $q=mysqli_query($con,"UPDATE `peserta` SET `nim`=`$nim`,`nama`=`$nama`,`sertifikasi`=`$sertifikasi` where `id_peserta`=`$id_peserta`");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
