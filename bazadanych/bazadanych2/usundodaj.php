<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="./przychodnia.css">
  </head>
  <body>
<div id="baner">
<h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
</div>
<div id="lewy">
<h2>PRAKTYKA LEKARZA RODZINNEGO</h2>
<!-- SKRYPT1  -->

<?php

$polaczenie = @new mysqli('localhost','root','','przychodnia');
if($polaczenie->connect_errno){

  echo "bledne polaczenie<br>";
  echo $polaczenie->connect_errno;
//2002 BLAD SWERWERA
//1045 bledne haslo
//1044 bledny login / uzytkownik
//1049 bledna baza danych







}

else {
  echo <<<TABLE
    <table>

<tr>
<th>ID</th>
<th>IMIE</th>
<th>NAZWISKO</th>
</tr>



<tr>

TABLE;
$zapytanie = "SELECT `id`,`imie`,`nazwisko` FROM `pacjenci`";

if ($rezultat = $polaczenie -> query($zapytanie)){
while ($wiersz = $rezultat ->fetch_assoc()){

  echo <<<WIERSZ

      <td>$wiersz[id]</td>
      <td>$wiersz[imie]</td>
      <td>$wiersz[nazwisko]</td>
      <td><a href="delet.php?dlt=$wiersz[id]">usun</a></td>
      <td><a href="usundodaj.php?upd=$wiersz[id]">edytuj</a></td>
</tr>




WIERSZ;


}
echo "</table>";



}
else {

  echo "bledne zapytanie";
}





  //echo"prawidlowo";
}







 ?>
<br><br>
<form method="post">
  Podaj id<br>
  <input type="number" name="x"><input type="submit" name="y" value="Pokaż dane">
  <h3>LEKARZE</h3>
  <ul>
    <li>pn-śr</li>
    <ol>
        <li>Anna Kwiatowska</li>
        <li>Jan Kowalewski</li>
      </ol>
    <li>czw-pt</li>
    <ol>
        <li>Krzysztof Nowak</li>
        </ol>
  </ul>
</form>
</div>
<div id="prawy">
<h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
<p>Dodanie nowego pacjenta</p>
<form action="nowy.php" method="post">
<input type="text" name="imie" value="">Imie<br>
<input type="text" name="nzw" value="">Nazwisko<br>
<input type="text" name="przewlekle" value="">Choroby przewlekle<br>
<input type="text" name="uczulenia" value="">Uczulenia<br>
<input type="text" name="choroba" value="">Choroba<br>
<input type="text" name="leki" value="">Leki przepisane<br>
<input type="text" name="opis" value="">Opis<br>
<input type="submit" name="xd" value="Wyslij">

</form>
<?php





 ?>




<?php
if (isset($_POST['y'])){

$id = $_POST['x'];
echo $id;
$zapytanie = "SELECT `imie`, `nazwisko`, `choroby_przewlekle`, `uczulenia` FROM pacjenci WHERE `id` = $id";

}
if (isset($_GET['upd'])){
  $id = $_GET['upd'];
$zapytanie1 = "SELECT * FROM pacjenci WHERE id='$id'";
if ($rezultat = $polaczenie->query($zapytanie1)){
  $wiersz = $rezultat->fetch_assoc();
}
else {

  echo "NIEDZIALAAAA";
}

echo <<<FORM


<p>Edycja pacjenta</p>
<form action="update.php" method="post">
<input type="text" name="imie1" value="$wiersz[imie]">Imie<br>
<input type="text" name="nzw1" value="$wiersz[nazwisko]">Nazwisko<br>
<input type="text" name="przewlekle1" value="$wiersz[choroby_przewlekle]">Choroby przewlekle<br>
<input type="text" name="uczulenia1" value="$wiersz[uczulenia]">Uczulenia<br>
<input type="text" name="choroba1" value="$wiersz[choroba]">Choroba<br>
<input type="text" name="leki1" value="$wiersz[leki_przepisane]">Leki przepisane<br>

<textarea name="opis1">$wiersz[opis]</textarea><br>
<input type="submit" name="af" value="Aktualizacja">
<input type="hidden" name="id" value="$_GET[upd]">
</form>





FORM;


}
 ?>
</div>

<footer id="stopka">
<p>utworzone przez: 11111111111</p>
<a href="kwerendy.txt">Pobierz plik z kwerendami</a>

</footer>
  </body>
</html>
