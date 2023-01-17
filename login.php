<?php
session_start();
if(isset($_SESSION['loggedin'])) header("Location: secret.php");
/* process login data */
 if(!isset($_POST['username']) || !isset($_POST['password'])) {
  header("Location: session.php");
 }
 $u = $_POST['uname']; 
 $p = $_POST['psw'];
 if($u=="Troy" && $p=="123") {
  $_SESSION['loggedin']=TRUE; $_SESSION['username']="Troy";
  header("Location: secret.php");
 }
 elseif($u=="James" && $p=="123") {
  $_SESSION['loggedin']=TRUE; $_SESSION['username']="james";
  header("Location: secret.php");
 }
 else{
    header("Location: session.php");
 }
?>