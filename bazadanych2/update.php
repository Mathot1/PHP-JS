<?php
if (empty($_POST['imie1']) || empty($_POST['nzw1']) || empty($_POST['przewlekle1']) || empty($_POST['uczulenia1']) || empty($_POST['choroba1']) || empty($_POST['leki1']) || empty($_POST['opis1'])){
header('location: ./usundodaj.php');

}
else {
  $a = $_POST['imie1'];
  $b = $_POST['nzw1'];
  $c = $_POST['przewlekle1'];
  $d = $_POST['uczulenia1'];
  $e = $_POST['choroba1'];
  $f = $_POST['leki1'];
  $g = $_POST['opis1'];
  $h = $_POST['id'];
  $polaczenie = @new mysqli('localhost','root','','przychodnia');
  $zapytanko1 = "UPDATE `pacjenci` SET `imie`='$a',`nazwisko`='$b',`choroby_przewlekle`='$c',`uczulenia`='$d',`choroba`='$e',`leki_przepisane`='$f',`opis`='$g' WHERE `id` = '$h'";
if (!$polaczenie->connect_errno){
if ($rezultat = $polaczenie->query($zapytanko1)){
header('location: ./usundodaj.php');


}
else {
echo "bledne zapytanie";
}



}
else {
  echo "blad";
}
$polaczenie->close();
}



 ?>
