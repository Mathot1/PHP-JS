<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>klasy</title>
  </head>
  <body>
    <?php
echo "<h5>klasy i obiekty</h5>";
    class shopProduct{
  //cialo klasy
  public $title = "Book";
  public $name = "Surname";
  public $fname = "Name";
  public $price = 0;
}

    $product1 = new shopProduct();
    echo "<br>";
    echo $product1 -> title = "PAN TADEUSZ" ;//przypisanie nowej wartosci do title
    echo "<br>";
    echo $product1 -> addition = "NEW";
    echo "<br>";
    $product2 = new shopProduct();
    var_dump($product1);
    echo "<br>";
    var_dump($product2);

     ?>






  </body>
</html>
