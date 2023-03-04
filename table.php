<?php 
require_once("com.php");
$somme=$_POST['somme'];
$payer1=50000;
$nom=$_POST['nom'];
$montant= $_POST['somme'];
$exo= $_POST['exoneration'];
$trim=$_POST['trim'];

$sum=$payer1-(($payer1*$exo)/100);
$reste=$somme-$sum;
date_default_timezone_set('Africa/bujumbura');


$date= date('d-m-y h:i:s');

$req="insert into taux(nom,trimestre,taux,exo,reste,date)values ('$nom','$trim','$exo','$sum','$reste','$date')";//excepter pour les int les autres types commme varchard ont les guillemets simple
$resultat=$pdo->query($req) or die(mysql_error());
header("location:tableau.php");

?>

