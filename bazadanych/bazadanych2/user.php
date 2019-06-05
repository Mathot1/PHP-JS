<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>użYTKOWNIK</h1><br>
    <form method="post">
      <input type="submit" name="g" value="wyloguj">
    </form>
    <?php
if(isset($_POST['g'])){
    session_start();
    session_destroy();
    header('location:./aaa.php');
}
     ?>
  </body>
</html>
