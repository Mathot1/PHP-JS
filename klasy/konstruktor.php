<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
class sp {
  //skladowe
  public $autor;
  public $name;
  public $money;
  public $waluta;


    public function __construct($autor,$name,$money,$waluta){
      $this->autor = $autor;
      $this->name = $name;
      $this->money = $money;
      $this->waluta = $waluta;
    }
    public function method(){
      return $this->autor." ".
             $this->name." ".
             $this->money." ".
             $this->waluta." ";

    }
    public function method2(){
      return "Autor: ".$this->autor."<br>"."Nazwa: ".
                       $this->name."<br>"."Cena: ".
                       $this->money."<br>"."Waluta: ".
                       $this->waluta."<br>";



    }
}
class spWrite{

public function write($sp){

$str = $sp->autor." ".
       $sp->name.method();
       echo $str;


}


}


//tworzenie produktu
$product1 = new sp("Jarek","Pan tadeusz",90,"zł");
echo "{$product1->method2()}";
echo   $product1->method2();



 ?>
  </body>
</html>
