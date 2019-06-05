<?php
require_once('./zarejestruj.php');
if(!$polaczenie->connect_errno){
$a = $polaczenie->real_escape_string($_POST['a']);
$b = $polaczenie->real_escape_string($_POST['b']);
$c = $polaczenie->real_escape_string($_POST['c']);

$e = $polaczenie->real_escape_string($_POST['e']);

$g = $polaczenie->real_escape_string($_POST['g']);
$h = $polaczenie->real_escape_string($_POST['h']);

$zapupr = "SELECT * FROM `uprawnienia` WHERE nazwa = '$h'";
$r = $polaczenie->query($zapupr);
$upr = $r->fetch_assoc();
$uprr = $upr['id']; //sprawdzanie jakie id ma user / administrator lmao



$zapytaniemail = "SELECT `mail` FROM `user` WHERE mail = '$c'";
$rezultat1 = $polaczenie->query($zapytaniemail);
if ($rezultat1->num_rows != 0) {
  session_start();
  $_SESSION["blad"] = "Podany adres email juz istnieje";
  header('location:./zarejestruj.php');
}



else {
session_destroy();
$zapytanie = "INSERT INTO `user`(`imie`, `nazwisko`, `mail`, `passwd`, `dataur`, `statusid`, `uprawnieniaid`) VALUES ('$a','$b','$c','$e','$g','2','$uprr')";

echo "dziala";
if ($rezultat = $polaczenie->query($zapytanie)){
echo "dzialaaaaaaa";
header('location:./aaa.php');
}
}


}
else {
echo "blad";

}

 ?>
