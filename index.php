<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//--------
echo " 1) ";
$name = "Justina";
$surname = "Babrauskiene";
$birthY = 1986;
$thisY = 2022;
$age = $thisY - $birthY;
echo "Aš esu " . $name . " " . $surname . ". Man yra " . $age . " metai(ų)." . "<br>"; 
//--------
echo " 2) ";
$var1 = rand(0, 4);
$var2 = rand(0, 4);
if($var1 > $var2 && $var2 != 0){
    $divisionResult = $var1 / $var2;
    echo $var1 . "/" . $var2 . " = " . round($divisionResult, 2) . "<br>";
} elseif ($var2 > $var1 && $var1 != 0){
    $divisionResult = $var2 / $var1;
    echo $var2 . "/" . $var1 . " = " . round($divisionResult, 2) . "<br>";
} else {
    echo "can't divide by 0. <br>";
}
//--------
echo " 3) ";
$a = rand(0, 25);
echo " a=" . $a . "<br>";
$b = rand(0, 25);
echo " b=" . $b . "<br>";
$c = rand(0, 25);
echo " c=" . $c . "<br>";
if(($a < $b && $b < $c) || ($c < $b && $b < $a)){
    echo $b . " yra vidurine reiksme. <br>";
} elseif (($b < $a && $a < $c) || ($c < $a && $a < $b)){
    echo $a . " yra vidurine reiksme. <br>";
} elseif (($b < $c && $c < $a) || ($a < $c && $c < $b)){
    echo $c . " yra vidurine reiksme. <br>";
} else {
    echo "nera vidurines reiksmes <br>";
}
//--------
echo " 4) ";
$a1 = rand(1, 10);
echo " a=" . $a1 . "<br>";
$b1 = rand(1, 10);
echo " b=" . $b1 . "<br>";
$c1 = rand(1, 10);
echo " c=" . $c1 . "<br>"; //b+c>a, a+c>b , a+b>c 
if(($b1 + $c1 > $a1) && ($a1 + $c1 > $b1) && ($a1 + $b1 > $c1)){
    echo "trikampis su tokiomis krastinemis egzistuoja. <br>";
} else {
    echo "trikampis su tokiomis krastinemis NEegzistuoja. <br>";
}
//--------
echo " 5) ";
$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;
$pirmas = rand(0, 2);
echo " a=" . $pirmas . "<br>";
if($pirmas == 0){
    $nuliai += 1;
} elseif ($pirmas == 1){
    $vienetai += 1;
} else {
    $dvejetai += 1;
}
$antras = rand(0, 2);
echo " b=" . $antras . "<br>";
if($antras == 0){
    $nuliai += 1;
} elseif ($antras == 1){
    $vienetai += 1;
} else {
    $dvejetai += 1;
}
$trecias = rand(0, 2);
echo " c=" . $trecias . "<br>";
if($trecias == 0){
    $nuliai += 1;
} elseif ($trecias == 1){
    $vienetai += 1;
} else {
    $dvejetai += 1;
}
$ketvirtas = rand(0, 2);
echo " d=" . $ketvirtas . "<br>";
if($ketvirtas == 0){
    $nuliai += 1;
} elseif ($ketvirtas == 1){
    $vienetai += 1;
} else {
    $dvejetai += 1;
}
echo " nuliai: " . $nuliai . ", ";
echo " vienetai: " . $vienetai . ", ";
echo " dvejetai: " . $dvejetai . ". <br>";
//--------
echo " 6) ";
$randN = rand(1, 6);
echo "<h" . $randN . ">" . $randN . "</h" . $randN . ">";
//--------
echo " 7) ";
$a2 = rand(-10, 10);
if($a2 < 0){
    echo "<font color='green'>".$a2."</font> <br>";
}elseif($a2 > 0){
    echo "<font color='blue'>".$a2."</font> <br>";
}else{
    echo "<font color='red'>".$a2."</font> <br>";
}
$b2 = rand(-10, 10);
if($b2 < 0){
    echo "<font color='green'>".$b2."</font> <br>";
}elseif($b2 > 0){
    echo "<font color='blue'>".$b2."</font> <br>";
}else{
    echo "<font color='red'>".$b2."</font> <br>";
}
$c2 = rand(-10, 10);
if($c2 < 0){
    echo "<font color='green'>".$c2."</font> <br>";
}elseif($c2 > 0){
    echo "<font color='blue'>".$c2."</font> <br>";
}else{
    echo "<font color='red'>".$c2."</font> <br>";
}
//--------
echo " 8) ";
$zvakiuKiekis = rand(5, 3000);
echo "zvakiu kiekis: " . $zvakiuKiekis . ". <br>";
if($zvakiuKiekis <= 1000){
echo "kaina = " . $zvakiuKiekis . " Eur <br>";
}elseif($zvakiuKiekis > 1000 && $zvakiuKiekis <= 2000){
    echo "su 3% nuolaida kaina = " . ($zvakiuKiekis * 0.97) . " Eur <br>";
}else{
    echo "su 4% nuolaida kaina = " . ($zvakiuKiekis * 0.96) . " Eur <br>";
}
//--------
echo " 9) ";
$p = rand(0, 100);
echo " a=" . $p . "<br>";
$p1 = rand(0, 100);
echo " b=" . $p1 . "<br>";
$p2 = rand(0, 100);
echo " c=" . $p2 . "<br>";
$aritmetVid = ($p + $p1 + $p2) / 3;
echo "aritmetinis vidurkis, kai visi skaiciai > 10: " . $aritmetVid . "<br>";
if($p < 10){
    $paturbintasAritVid = ($p1 + $p2)/2;
echo "aritmetinis vidurkis be skaiciu < 10: " . $paturbintasAritVid . "<br>";
} elseif ($p1 < 10){
    $paturbintasAritVid = ($p + $p2)/2;
echo "aritmetinis vidurkis be skaiciu < 10: " . $paturbintasAritVid . "<br>";
} elseif ($p2 < 10){
    $paturbintasAritVid = ($p + $p1)/2;
    echo "aritmetinis vidurkis be skaiciu < 10: " . $paturbintasAritVid . "<br>";
} elseif($p2 > 10 && $p1 > 10 && $p > 10){
    
}
else {
    echo "daugiau negu vienas skaicius yra < 10 <br>";
}
//------------
?>
</body>
</html>