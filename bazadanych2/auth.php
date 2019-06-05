<?php
require_once('./connect.php');
if (isset($_SESSION['log'])){
  switch ($_SESSION['id']) {
    case '1':
      header('location:./admin.php');
      break;

    case '2':
      header('location:./user.php');
      break;
  }
}
else {


if (!$polaczenie->connect_errno){

  if (isset($_SESSION['blad'])){
    unset($_SESSION['blad']);
  }



  $a = $polaczenie->real_escape_string($_POST['a']);
  $b = $polaczenie->real_escape_string($_POST['b']);

if ($a != '' && $b != '') {
$zapytanie = "SELECT * FROM `user` WHERE mail = '$a' AND passwd = '$b'";
$rezultat = $polaczenie->query($zapytanie);
$wiersz = $rezultat->fetch_assoc();
if ($rezultat->num_rows >0 || (isset($_SESSION['log']) && $_SESSION['log'])){
if (!isset($_SESSION['log'])){
$_SESSION['log'] = 1;
}

//  echo $rezultat->num_rows;
switch ($wiersz['uprawnieniaid']) {
  case '1':
  $_SESSION['id'] = 1;
    header('location:./admin.php');
    break;

  case '6':
  $_SESSION['id'] = 2;
    header('location:./user.php');
    break;
}


  $polaczenie->close();
}
else {
  $_SESSION['blad'] = 'Bledne dane';
  header('location:./aaa.php');
}

}
else {
  $_SESSION['blad'] = 'Wypelnij pola';
  header('location:./aaa.php');


}
}


else {
  $_SESSION['blad'] = 'Error';
header('location:./aaa.php');

}
}
 ?>
