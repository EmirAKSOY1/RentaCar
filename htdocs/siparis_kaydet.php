<?php
include("bag.php");
$ad=$_POST['ad'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];
$tc=$_POST['tc'];
$soyad=$_POST['soyad'];
$plaka=$_POST['arac_plaka'];
$toplam=$_POST['toplam'];
$tarih=$tarih = date('d-m-Y H:i:s',time());

$sql = "INSERT INTO siparis(ad,soyad,tel,mail,tc,plaka,toplam,tarih) VALUES ('$ad', '$mail', '$tel','$tc','$soyad','$plaka','$toplam','$tarih')";
if ($baglan->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $baglan->error;
  }
  $doldur = "UPDATE cars SET Musait='0' WHERE Plaka='$plaka'";

  if ($baglan->query($doldur) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $baglan->error;
  }
  $baglan->close();
?>