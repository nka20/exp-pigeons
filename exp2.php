<?php
require "com.php";

$nom=$_POST['nom'];
$trim=$_POST['trimestre'];
$sum=$_POST['nombre'];

$int="insert into $trim(nom,somme)values ('$nom','$sum')";
$in=$pdo->query($int) or die(mysql_error());

header("location:tableau.php");
?>