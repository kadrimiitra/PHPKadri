<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP harjutus</title>
</head>
<body>
<h1>Harjutus 4</h1>
<?php
$p = 10;
switch ($p) {
    case ($p >= 10):
        echo "Super!";
        break;
    case ($p >= 5 && $p <= 9):
        echo "Tehtud!";
        break;
        case ($p < 5):
            echo "Kasin!";
            break;
    default:
        echo "Punkte pole lisatud";
        break;
}

?>
<form action="" method="GET">
    Lisa sünniaasta <input type="number" name="synd" min="1900" max="2100">
    <input type="submit" value="Leia juubel"><br>
</form>
<?php
if (!empty($_GET['synd'])) {
    $aasta = $_GET['synd'];
    $seeAasta = date('Y');
    $vanus = $seeAasta - $aasta;
    if ($vanus % 5 == 0) {
        echo "Sul juubel!<br>";
    } else {
        echo "Ei ole juubel!<br>";
    }
}
?>
<?php
$nr1 = 6;
$nr2 = 3;

if ($nr2 != 0 && $nr1 !=0) {
    $tehe = $nr1 / $nr2;
    echo $tehe;
} else {
    echo "Nulliga ei saa jagada";
}

?>
<h1>Harjutus 3</h1> 
<form action="" method="GET">
Toode1: <input type="number" name="toode1"><br>
Toode2: <input type="number" name="toode2"><br>
Toode3: <input type="number" name="toode3"><br>
<input type="submit" value="Arvuta">
</form>
<?php
if (!empty($_GET['toode1']) &&
     !empty($_GET['toode2']) &&
    !empty($_GET['toode3'])) {
 $t1 = $_GET['toode1'];
$t2 = $_GET['toode2'];
$t3 = $_GET['toode3'];
$kokku = $t1+$t2+$t3;
echo "Toode 1: $t1 tk<br>";
echo " Toode 2: $t2 tk<br>";
echo "Toode 3: $t3 tk<br>";
echo "Kõik kokku: $kokku tk<br>";  
}

?>

<h1>Harjutus 2</h1>
<?php
$arv1 = 5;
$arv2 = 3;
$tehe = $arv1 / $arv2;
$jaak = $arv1 % $arv2;

echo " Vastus: $tehe<br>";
printf("Vastus: %0.2f", $tehe);
echo "<br> Jääk: $jaak";
?>

<h1>Harjutus 1</h1>  
    <?php
/*
Harjutus 01
8.2.24
Lihtsalt harjutan
*/
    $enimi = "Kadri";
    $pnimi = "Miitra";
    $v = 15;
    $pikkus = 1.3;
    $hyydnimi = "THE BOSS";
    $lugu = 'Dr. Alban - "It\'s my life"';
    echo "Tere $enimi \"$hyydnimi\" $pnimi!<br>";
    echo " Vanus: $v <br>Pikkus: $pikkus</p>";
    echo '<p> Lemmik lugu on : '.$lugu.'</p>';
?>

</body>
</html>