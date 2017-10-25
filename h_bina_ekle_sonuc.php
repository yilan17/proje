<?php
include "db.php";
$kontrol = $db->query("SELECT * FROM hizmetbinasi  ORDER BY katid DESC LIMIT 1  ")->fetch(PDO::FETCH_ASSOC);
 if ($kontrol){

    $i=$kontrol["katid"]+1;

   $query =	$db->prepare("INSERT INTO hizmetbinasi (katid,resim) values ('$i','katiki.png')");
     $kaydet=$query->execute(array());
     if($kaydet){
       $last_id =$db->lastInsertId();
       echo'<script>window.alert("Kat no Ekleme İşlemi Başarıyla Gerçeklenmiştir.");</script>';
       header ("refresh: 0.2; url=h_bina.php");
         } else {
           echo'<script>window.alert("Ekleme İşlemi Başarısız Oldu.");history.back();</script>';
               }

}


?>
