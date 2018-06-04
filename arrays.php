<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 29/05/2018
 * Time: 12:56
 */
$a = array(1 , 2, 3, 6, "truus");
echo $a[0]. "<br>";
echo $a[2];

echo "<br>";

$apen = array("chimpansee", "oerang oetang", "gorilla", "neusaap");

$apen[4] = "mandril";

print_r ($apen);

echo "<br>";

$apen = array("chimpansee", "oerang oetang", "gorilla", "neusaap");

$apen[4] = "mandril";

$apen[6] = "baviaan";
echo "<ul";
foreach ($apen as $aap){
    echo "<li>".$aap."</li>";
}
echo "</ul>";