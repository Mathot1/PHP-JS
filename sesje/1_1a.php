<?php


session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sesja 2</title>
  </head>
  <body style="background-color:grey">
    <h2>Strona 2</h2>
    witaj
    <?php

    echo $_SESSION['imie'];
    echo " <a href='./index.php'>Strona1<a><br>";
        echo " <a href='./10_aaa.php'>Strona3<a><br>";
    echo "identyfikator sesji:<font style='background-color:green'>".session_id()."</font>";
     ?>
  </body>
</html>
