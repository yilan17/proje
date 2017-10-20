<?php
include "db.php";

$guserad	=	($_POST["userad"]);
$gusersifre		=	($_POST["usersifre"]);
$gusersifre = md5($gusersifre);
if(($guserad == " ") or ($gusersifre ==" ")){
   echo '<script>window.alert("Kullanıcı adı ve sifresi boş");</script>';
   header ("location:index.php");
}else{
  $query = $db->query("Select * from user where ad='$guserad' and sifre='$gusersifre' ")->fetch(PDO::FETCH_ASSOC);

  if ( $query>1 ){

      session_start();

      $_SESSION["login"]=true;
      $_SESSION["id"] = $query["id"];


        header("location:anasayfa.php");

    }else{

        echo '<script>window.alert("Kullanıcı Adı ve Şifre Yanlıştır.");history.back();</script>';



			}
}
?>
