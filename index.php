
<link rel= "stylesheet" href= "style.css">

<?php
 
$nimi= "Markus Kuuse"; // tekst e string
$n = 32; // täisarv e integer
$n1 = 2.4423; //kümnendmurrud e float
$t = true; // tõeväärtus e boolean

$m = array (8, "Tere", $n, 3.14, $nimi, false);

$n2 = 112;
$n3 = "112";

$nn = $n2 + $n1;
$nm = $n2.$n1;

array ('id' => 1, 'FirstName' => "Markus", 'LastName' => "Kuuse");

echo '<h1>Tere IT-17E | Mina olen $nimi</h1>'; // Ülakomad väljastavad teksti nii nägu on

echo "<h1>Tere IT-17E | Mina olen $nimi</h1>";

echo "<p>See ei ole enam pealkiri, vaid lihtsalt sisu</p>";


echo "<p".$m[2]."</p>";

echo $nn." ".$nm."<br />";

echo "$n2 krüpteeritult on: ". md5($n2);

echo "<p>Näide, sellest kuidas GIT näitab muudatusi</p>";

echo "<img src='https://vignette.wikia.nocookie.net/deathbattlefanon/images/c/ce/Shrek_clipart4.png/revision/latest?cb=20140813064239'/>";


?>