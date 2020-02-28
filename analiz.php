<?php
$adi = $_POST["adi"];
$dogumYili = $_POST["dogumYili"];
$yas = date("Y")- $dogumYili;
echo "Merhaba <br>";
echo "Adınız:".$adi."<br>";
echo "Yaşınız:".$yas;
?>