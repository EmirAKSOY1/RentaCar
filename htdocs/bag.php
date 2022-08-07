<?php 
$host="127.0.0.1";
$vt_user="root";
$vt_password="";
$_database="rent";

$baglan= new mysqli($host,$vt_user,$vt_password);

if(! $baglan) die ("Mysql Baglantısında Hata Oluştu!");

mysqli_select_db($baglan,$_database) or die ("Veritabanına Bağlanırken Hata Oluştu!");


?>