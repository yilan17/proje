<?php
include "db.php";
$gid=$_GET["id"];
$query	=	$db->prepare("DELETE FROM user WHERE id='$gid'");
$sil = $query->execute(array());
if($sil){
          echo'<script>window.alert("Silme İşlemi Başarıyla Gerçeklenmiştir.");</script>';
           header ("refresh: 0.2; url=user.php");
           }else{
             echo'<script>window.alert("Silme İşlemi Başarısız.");history.back();</script>';
           }

?>
