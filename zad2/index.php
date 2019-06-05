<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="xd" >wpisz swoje ulubione marki aut (oddziel spacja)<br>
      <input type="submit" name="prz" value="wyslij">
    </form>




    <?php

if (isset($_POST['prz'])){


$pobrane = $_POST['xd'];

$liczba = str_word_count($pobrane, 0,  'ąęłóżźśćńöĄĘŁÓŻŹŚĆŃ');
//echo $liczba;


$rozlaczanie = explode(" ",$pobrane);

for ($i=1; $i <= $liczba; $i++){
  $t = $i -1;
  echo "auto $i: $rozlaczanie[$t]<br>";



}




}










     ?>
  </body>
</html>
