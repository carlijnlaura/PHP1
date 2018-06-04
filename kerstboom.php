<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 31/05/2018
 * Time: 08:51
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP opdrachten</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
echo "<br>";
    for($i=0; $i<=20; $i++) {
        for($j = 0; $j<$i; $j++ ){
            echo "*";
        }
        echo "*<br>";
    }
?>
</body>
</html>
