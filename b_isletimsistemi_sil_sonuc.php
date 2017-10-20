<?php
include "db.php";
$gid=$_GET["id"];
$query	=	$db->prepare("DELETE FROM isletimsistemi WHERE id='$gid'");
$sil = $query->execute(array());
if($sil){
          echo'<script>window.alert("Silme İşlemi Başarıyla Gerçeklenmiştir.");</script>';
           header ("refresh: 0.2; url=b_isletimsistemi.php");
           }else{
             echo'<script>window.alert("Silme İşlemi Başarısız.");history.back();</script>';
           }

?>
