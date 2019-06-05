<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>metody</title>
  </head>
  <body>
    <?php
    class sp{
      public $title = "title";
      public $producer = "name";
      public $sname = "surname";
      public $money = 420;
      //metoda o nazwie getproducer
      public function GetProducer(){


        return $this->producer." ".
               $this->sname." ".
               $this->money." ";

      }

    }
    $product1 = new sp();
    $product1 -> title = "Pan Tadeusz";
    $product1 -> producer = "Jan";
    $product1 -> sname = "mickiewicz";
    $product1 -> money = 1024;

    echo "Autor {$product1->GetProducer()}\n";



     ?>



  </body>
</html>
