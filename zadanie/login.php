<?php
session_start();
if (isset($_SESSION['imie'])){

header("Location:./zalogowany.php");


}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:grey">
    <form method="post">
    <input type="text" name="a1" value="login">  <br>
    <input type="password" name="a2">  <br>
    <input type="submit" name="b1" value="zaloguj"><br>

    </form>
    <?php

    if (isset($_POST['b1'])){
      $login = $_POST['a1'];
      $haslo = $_POST['a2'];
      if(empty($login) || empty($haslo)){

        echo "Uzupelnij pola<br>";


      }
      else if($login == 'jan' && $haslo == 'tajne') {

        $_SESSION['imie'] = "jan";
        header("Location:./zalogowany.php");




      }
      else {

        echo "Bledne dane";


      }



    }



     ?>
  </body>
</html>
