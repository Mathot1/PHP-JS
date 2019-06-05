<?php
if (empty($_POST['imie']) || empty($_POST['nzw']) || empty($_POST['przewlekle']) || empty($_POST['uczulenia']) || empty($_POST['choroba']) || empty($_POST['leki']) || empty($_POST['opis'])){
header('location: ./usundodaj.php');

}
else {
  $a = $_POST['imie'];
  $b = $_POST['nzw'];
  $c = $_POST['przewlekle'];
  $d = $_POST['uczulenia'];
  $e = $_POST['choroba'];
  $f = $_POST['leki'];
  $g = $_POST['opis'];
$polaczenie = @new mysqli('localhost','root','','przychodnia');
$zapytanko = "INSERT INTO `pacjenci`(`id`, `imie`, `nazwisko`, `choroby_przewlekle`, `uczulenia`, `choroba`, `leki_przepisane`, `opis`) VALUES (NULL, '$a', '$b', '$c', '$d', '$e', '$f', '$g')";

if(!$polaczenie->connect_errno){
if ($rezultat = $polaczenie->query($zapytanko)) {
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
