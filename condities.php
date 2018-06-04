<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 31/05/2018
 * Time: 09:21
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

        .rood {
            border: red solid 3px;
        }
    </style>
</head>
<body>
<?php
for($i=1; $i<=9; $i++) {
    if($i ==3) {
        $class = "class= 'rood'";
    } else {
        $class= "";
    }
   echo "<img ".$class. "src= 'img/apen/aap".$i.".jpg'>";
}
?>
</body>
</html>
