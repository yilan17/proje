<?php
	session_start();
	$_SESSION["login"]=false;
		echo'<script>window.alert("Çıkış İşlemi Başarıyla Gerçeklenmiştir.");</script>';
						header ("refresh: 0.2; url=index.php");
?>
