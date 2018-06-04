<?php
/**
 * Created by PhpStorm.
 * User: Carlijn
 * Date: 30/05/2018
 * Time: 09:50
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP opdrachten</title>
</head>

<body>

<?php
$bomen = array("01-arborist-cherry-trees.jpg", "35148475196_1b9d65b0d7_k.jpg",
    "irish-tree-society-feature.jpg", "tree-dawn-nature-bucovina-56875.jpg", "Trees-2_opt.jpg");
foreach($bomen as $boom){
    echo "<img src= 'img/bomen/".$boom."'>";
}
?>
</body>
</html>
