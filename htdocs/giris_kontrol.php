

<?php

session_start();
include("bag.php");

$kuladi = $_POST['user'];

$parola = $_POST['pass'];

if($kuladi == "" || $parola == "") {



} else {

$sor = mysqli_query($baglan,"SELECT * FROM user where Mail='$kuladi' and Pass='$parola'");

$uyevarmi = mysqli_num_rows($sor); 

if($uyevarmi == 0) { 

echo "Giriş Başarısız!";

} else { 

$uyebilgi = mysqli_fetch_assoc($sor); 



$_SESSION['İsim'] =$uyebilgi['Name'];
echo "<script>location.href='admin_panel.php';</script>";



}}
?>