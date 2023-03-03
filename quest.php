<?php
require "com.php";
$nom=$_POST['nom'];
$classe=$_POST['classe'];
$minerval=$_POST['minerval'];
 
$req="insert into formulaire(nom,classe)values ('$nom','$classe')";
$res=$pdo->query($req) or die(mysql_error());

$req1="insert into minerval(nom,minerval)values ('$nom','$minerval')";
$res1=$pdo->query($req1) or die(mysql_error());
header("location:test.php");
?>