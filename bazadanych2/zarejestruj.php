<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>rejestracja</title>
  </head>
  <body>
    <?php
    if(isset($_SESSION['blad'])){
      echo $_SESSION['blad'];
    }
     ?>
    <div id="huj" style="color:red">

    </div>
    <div id="huj2" style="color:red">

    </div>
    <form action="auth2.php" method="post">
      <input type="text" id="a" name="a" placeholder="imie" required><br>
      <input type="text" id="b" name="b" placeholder="nazwisko" required><br>
      <input type="text" id="c" name="c" placeholder="email" required><br>
      <input type="text" id="d" name="d" placeholder="potwierdz email" required><br>
      <input type="password" id="e" name="e" placeholder="haslo" required><br>
      <input type="password" id="f" name="f" placeholder="potwierdz haslo" required><br>
      <input type="date" id="g" name="g" value="" required>data utrodzenia<br>
      <select id="h" name="h">
        <?php

        $polaczenie = @new mysqli('localhost','root','','logowanie');
        $zapytanie = "SELECT nazwa FROM `uprawnienia`";

    if($rezultat = $polaczenie->query($zapytanie)){
      while ($wiersz = $rezultat->fetch_assoc()) {
        echo <<<OPCJE
        <option>$wiersz[nazwa]</option>



OPCJE;
      }


    }
         ?>
      </select><br>
      <input type="submit" value="Zarejestruj" id="i" name="i" disabled>
    </form>



    <script>
      var a = document.getElementById('a');
      var b = document.getElementById('b');
      var c = document.getElementById('c');//e
      var d = document.getElementById('d');//e
      var e = document.getElementById('e');//h
      var f = document.getElementById('f');//h
      var g = document.getElementById('g');//data
      var h = document.getElementById('h');//select optjon
      var fff = document.getElementById('i');
      function funkcja1(){
      if (a.value.length > 0 && b.value.length > 0 && c.value.length > 0 && d.value.length > 0 && e.value.length > 0 && f.value.length > 0 &&
         g.value != '' && h.value != '' && c.value == d.value && e.value == f.value){
        fff.disabled = false;
//&& c.value == d.value && e.value == f.value

      }
       else {
        fff.disabled = true;
       }


    }
    function funkcja2() {
      if (c.value != d.value){
      document.getElementById('huj').innerHTML= "Adresy email są różne<br>";


    }
    else {
      document.getElementById('huj').innerHTML= "";
    }
    if (e.value != f.value){
    document.getElementById('huj2').innerHTML= "Hasła różnią się od siebie";


  }
  else {
    document.getElementById('huj2').innerHTML= "";
  }

  }
    a.addEventListener('input',funkcja1);
    b.addEventListener('input',funkcja1);
    c.addEventListener('input',funkcja1);
    d.addEventListener('input',funkcja1);
    e.addEventListener('input',funkcja1);
    f.addEventListener('input',funkcja1);
    g.addEventListener('input',funkcja1);
    h.addEventListener('change',funkcja1);
    i.addEventListener('change',funkcja1);


    d.addEventListener('input',funkcja2);
    c.addEventListener('input',funkcja2);
    e.addEventListener('input',funkcja2);
    f.addEventListener('input',funkcja2);
    </script>

  </body>
</html>
