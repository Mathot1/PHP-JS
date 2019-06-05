<?php session_start();


//unset($_SESSION['imie']);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:grey">
    <h3>strona 3</h3>
    <?php
echo $_SESSION['imie'];
echo " <a href='./index.php'>Strona1<a><br>";
    echo " <a href='./1_1a.php'>Strona2<a><br>";
echo "identyfikator sesji:<font style='background-color:green'>".session_id()."</font><br><br>";
echo "<a href='10_aaa.php?usunSesje=1'>Usun Sesje</a>";

if (isset($_GET['usunSesje'])){

session_destroy();



}
//uzytkownik wpisuje login i haslo do formularza na stronie login.php jesli login bedzie jan i haslo fajne
//to przekieruje go do strony zalogowany.php utworzy sesje na stronie zalogowany i przypisze do zmiennych sesyjnych login
//wyswietli na stronie w akapicie tresc witaj .......login urzytkownika !
//pomysl w jaki sposob
//jesli zalogowany urzytkownik bedzie chcial powrocic do strony login.php to bedzie przekierowany na strone zalogowany.php
//umorzliwij wylogowanie
     ?>
  </body>
</html>
