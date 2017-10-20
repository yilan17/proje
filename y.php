<?php
session_start();
if($_SESSION["login"]==true){
echo $id=$_SESSION["id"];
}
?>
