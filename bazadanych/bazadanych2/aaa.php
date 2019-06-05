<?php
session_start();
 if (isset($_SESSION['log']) && $_SESSION['log'] == 1){
   header('location:./auth.php');
 }
 ?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Logowanie</title>
  </head>
  <body>
    <?php
    if (isset($_SESSION['blad'])){
      echo $_SESSION['blad'];
    }
    ?>
    <form action="auth.php" method="post">
      <input type="text" name="a" placeholder="login"><br>
      <input type="password" name="b">Hasło<br>
      <input type="submit" name="c" value="Zaloguj"><br>
    </form>
    <a href="zarejestruj.php">Zarejestruj</a>
    <?php






     ?>
  </body>
</html>
