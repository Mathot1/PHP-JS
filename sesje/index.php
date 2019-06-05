<?php
session_start();
$_SESSION['imie'] = "Filip";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesje</title>
  </head>
  <body style="background-color:grey">
<h3>Strona 1</h3>
witam
<?php
echo $_SESSION['imie'];
echo " <a href='./1_1a.php'>Strona2<a><br>";
    echo " <a href='./10_aaa.php'>Strona3<a><br>";
    echo "identyfikator sesji:<font style='background-color:green'>".session_id()."</font>";

 ?>


  </body>
</html>
