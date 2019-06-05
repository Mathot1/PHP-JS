<?php
$dlt = $_GET['dlt'];
echo $dlt;

$ad = @new mysqli('localhost','root','','przychodnia');
if (!$ad -> connect_errno){
$zapytanie = "DELETE FROM `pacjenci` WHERE `pacjenci`.`id` = $dlt";

if ($rezultat = $ad -> query($zapytanie)){
$ad ->close();
header('location: ./pacjent.php');
}
else {
  echo "bledne zapytanie";
}



}else {

echo "blad polaczenia";

}
 ?>
