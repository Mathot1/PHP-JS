<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Weterynarz</title>
      <link rel="stylesheet" href="./weterynarz.css">
  </head>

  <body>
<div id="baner">
<h1>GABINET WETERYNARYJNY</h1>
</div>

<div id="L">
<h2>PSY</h2>
<!-- SKRYPT1  -->
<?php
//polaczenie z serwerem
if (@$polaczenie = mysqli_connect('localhost','root','')){
//POLSKIE ZNAKI POLACZENIE Z BAZA
//  echo "prawidlowe połączenie z serwerem<br>";

}
else {

exit("Błędne połączenie z serwerem");



}
// polaczenie z baza danych
if (mysqli_select_db($polaczenie, "weterynarz")) {

//echo "polaczyles sie z baza weterynarz";

}
else {
echo "nie polaczyles sie z baza weterynarz";


}
mysqli_set_charset($polaczenie, "utf8");
$zapytanie = "SELECT `id`, `imie`, `wlasciciel` FROM `zwierzeta` WHERE `rodzaj` = 1";
if ($rezultat = mysqli_query($polaczenie, $zapytanie)){

//  echo "dziala";

}
//1 sposob
else {echo"niedziala";}
//
// while ($wiersz = mysqli_fetch_row($rezultat)) {
//
// echo $wiersz[0]." ";
// echo $wiersz[1]." ";
// echo $wiersz[2]."<br>";
// }
// //2 sposob

while ($wiersz = mysqli_fetch_row($rezultat)) {

echo <<<WIERSZ
$wiersz[0]
$wiersz[1]
$wiersz[2]<br>


WIERSZ;
}


 ?>
 <h2>KOTY</h2>
<!-- SKRYPT2  -->
<?php

$zapytanie = "SELECT `id`,`imie`,`wlasciciel` FROM `zwierzeta` WHERE `rodzaj` =2";


if ($rezultat = mysqli_query($polaczenie, $zapytanie)) {

while ($wiersz = mysqli_fetch_array($rezultat)) {
  echo <<<WIERSZ
  $wiersz[0]
  $wiersz[1]
  $wiersz[2]<br>

WIERSZ;
}



}
else {
  echo"bledne dane";
}







mysqli_close($polaczenie);

 ?>


</div>

<div id="M">
<h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
<!-- skrypt3  -->
<?php

$zapytanie = "SELECT `imie`,`telefon`,`szczepienie`,`opis` FROM `zwierzeta`";
if($rezultat = mysqli_query($polaczenie, $zapytanie)) {
while ($wiersz = mysqli_fetch_array($rezultat)) {
  echo <<<WIERSZ
  Pacjent: $wiersz[imie]<br>
  Telefon: $wiersz[telefon], Ostatnie szczepienie: $wiersz[szczepienie]<br>
  Informacje: $wiersz[opis]<hr>


WIERSZ;
}



}







 ?>
</div>

<div id="R">
<h2>WETERYNARZ</h2>
<p>Krzysztof Nowakowski, lekarz weterynarii</p>
<h2>GODZINY PRZYJĘĆ</h2>
<table id="tab">
<tr>
  <td>Poniedziałek </td><td>15:00 - 19:00</td><br>
</tr><tr>
  <td>Wtorek </td><td>15:00 - 19:00</td>
</tr>
</table>
</div>


  </body>
</html>
