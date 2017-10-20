<?php
include("db.php");
 $gid=$_POST ["id"];
 $gad   = $_POST["ad"];
 $gsifre = $_POST["sifre"];
 $gsifre = md5($gsifre);
 $gyetki = $_POST["yetki"];

 if(($gid=="") or ($gad=="") or ($gsifre=="") or ($gyetki=="")){
 		echo'<script>window.alert("Hiç Bir YOK.");history.back();</script>';
 	}else{
        $query = $db->prepare("UPDATE user SET ad='$gad', sifre='$gsifre', yetki='$gyetki' WHERE id='$gid'");
        $guncelle = $query->execute(array());
        if ( $guncelle ){
          echo'<script>window.alert("Güncelleme İşlemi Başarıyla Gerçeklenmiştir.");</script>';
     						header ("refresh: 0.2; url=user.php");
}else{
  echo'<script>window.alert("Güncelleme Başarısız.");history.back();</script>';
     }
}
