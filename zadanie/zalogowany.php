<?php
session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:grey">
    <?php
    echo "Witaj ".$_SESSION['imie']."!";
    echo "<a href='zalogowany.php?r=1'>Wyloguj</a>";
    if (isset($_GET['r'])){
      session_destroy();
      header('Location:./login.php');



    }
     ?>
  </body>
</html>
