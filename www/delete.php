<?php
 include "db.php";
 if(isset($_GET['id']))
 {
 $id=$_GET['id'];
 $q=mysqli_query($con,"delete from 'peserta' where 'id_peserta'='$id_peserta'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
