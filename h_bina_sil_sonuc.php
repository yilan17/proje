<?php
include "db.php";
$gid=$_GET["id"];
$query	=	$db->prepare("DELETE FROM hizmetbinasi WHERE id='$gid'");
$sil = $query->execute(array());
if($sil){
          echo'<script>window.alert("Silme İşlemi Başarıyla Gerçeklenmiştir.");</script>';
           header ("refresh: 0.2; url=h_bina.php");
           }else{
             echo'<script>window.alert("Silme İşlemi Başarısız.");history.back();</script>';
           }

?>
