<?php
include("db.php");
$gad   = $_POST["ad"];
if(($gad=="") ){
 		echo'<script>window.alert("Hiç Bir YOK.");history.back();</script>';
 	}else{
 				 $varmi = $db->query("SELECT * FROM isletimsistemi WHERE ad = '$gad'", PDO::FETCH_ASSOC);
 					if($varmi->rowCount()){
            foreach ($varmi as $row){
 					echo'<script>window.alert("BU isletim sistemi Mecuttur Başka bir isletim sistemi adı giriniz.");history.back();</script>';
              }

          }else {
       					$query =	$db->prepare("INSERT INTO isletimsistemi (ad) values ('$gad')");
                    $kaydet=$query->execute(array());
       						if($kaydet){
                    $last_id =$db->lastInsertId();
       							echo'<script>window.alert("İsletim sistemi Ekleme İşlemi Başarıyla Gerçeklenmiştir.");</script>';
       						header ("refresh: 0.2; url=b_isletimsistemi.php");
       					      } else {
 							          echo'<script>window.alert("Ekleme İşlemi Başarısız Oldu.");history.back();</script>';
 						                }
 					  }
 	}

?>
