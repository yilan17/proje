<?php
include("db.php");

 $gad   = $_POST["ad"];
 $gsifre = $_POST["sifre"];
 $gsifre = md5($gsifre);
 $gyetki = $_POST["yetki"];

 if(($gad=="") or ($gsifre=="") or ($gyetki=="")){
 		echo'<script>window.alert("Hiç Bir YOK.");history.back();</script>';
 	}else{

 				 $varmi = $db->query("SELECT * FROM user WHERE ad = '$gad'", PDO::FETCH_ASSOC);
 					if($varmi->rowCount()){
            foreach ($varmi as $row){
 					echo'<script>window.alert("BU Kullanıcı Mectur Başka bir Kullanıcı adı giriniz.");history.back();</script>';
              }

          }else {
       					$query =	$db->prepare("INSERT INTO user (ad, sifre, yetki) values ('$gad', '$gsifre', '$gyetki')");
                    $kaydet=$query->execute(array());
       						if($kaydet){
                    $last_id =$db->lastInsertId();
       							echo'<script>window.alert("Kullanıcı Ekleme İşlemi Başarıyla Gerçeklenmiştir.");</script>';
       						header ("refresh: 0.2; url=user.php");
       					      } else {
 							          echo'<script>window.alert("Ekleme İşlemi Başarısız Oldu.");history.back();</script>';
 						                }
 					  }
 	}

?>
