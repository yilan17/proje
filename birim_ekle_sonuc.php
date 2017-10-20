<?php
include("db.php");
$gad   = $_POST["ad"];
if(($gad=="") ){
 		echo'<script>window.alert("Hiç Bir YOK.");history.back();</script>';
 	}else{
 				 $varmi = $db->query("SELECT * FROM user WHERE ad = '$gad'", PDO::FETCH_ASSOC);
 					if($varmi->rowCount()){
            foreach ($varmi as $row){
 					echo'<script>window.alert("BU Birim Mecuttur Başka bir Birim adı giriniz.");history.back();</script>';
              }

          }else {
       					$query =	$db->prepare("INSERT INTO birim (ad) values ('$gad')");
                    $kaydet=$query->execute(array());
       						if($kaydet){
                    $last_id =$db->lastInsertId();
       							echo'<script>window.alert("Birim Ekleme İşlemi Başarıyla Gerçeklenmiştir.");</script>';
       						header ("refresh: 0.2; url=birim.php");
       					      } else {
 							          echo'<script>window.alert("Ekleme İşlemi Başarısız Oldu.");history.back();</script>';
 						                }
 					  }
 	}

?>
