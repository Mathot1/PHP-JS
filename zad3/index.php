<?php


$dane = array(

"janusz" => array( "auto" => array("ford","ferrari",),),

"grazyna" => array( "auto" => array("mini","mercedes",),),

"michal" => array( "auto" => array("subaru","nissan",),),
);
//$dane[0][1] = array("mazda","subaru","nissan");
//$dane[1][0] = array("janusz","grazyna","michal");
//$dane[1][1] = array("nowak","jankowski","errx");
function funkcja ($dane){
foreach ($dane as $key =>$dabr) {
 echo $key." ";
  foreach ($dabr as $dabf =>$dabp) {
    echo $dabf.": ";
    foreach ($dabp as $key2) {
      echo $key2." ";
    }
  }
echo "<br>";
}

}

funkcja($dane);






 ?>
