<?php
require "com.php";
$ins="select * from taux order by id ASC";
$res=$pdo->query($ins) or die(mysql_error());

$in="select * from taux order by id ASC";
$rest=$pdo->query($in) or die(mysql_error());

$int="select sum(reste) from taux";
$ret=$pdo->query($int) or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1px solid>
    <thead>
<tr>
<th>id</th>
<th>nom</th>
<th>trimestre</th>
<th>taux</th>
<th>exo</th>
<th>vous devez ou on vous doit</th>
</tr>

</thead>
<tbody>
<?php while($al=$res->fetch()) {?>

<tr>
<td><?php echo $al["id"] ?></td>
<td><?php echo $al["nom"] ?></td>
<td><?php echo $al["trimestre"] ?></td>
<td><?php echo $al["taux"] ?></td>
<td><?php echo $al["exo"] ?></td>
<td><?php echo $al["reste"] ?></td>
<td><?php echo $al["date"] ?></td>
<td>
<a href="#"><span class="glyphicon glyphicon-edit"></span>modifier</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a onclick="return confirm('etes-vous sur de vouloir supprimer la filiere ?')" href="#" class="btn btn-alert">supprimer</a>
<a href="#">activer</a>
</td>
</tr>

<?php } ?>
</tbody>

</table>
<?php foreach($pdo->query($int) as $ak) {?>
<p>il vous reste payer <?php echo $ak['sum(reste)']; ?> </p>
<?php }?>

<a href="sup.php">supprimer tout</a><br>
<a href="formulaire_de_paiement.php">ajouter nouveau</a><br>
<button onclick="window.print()">print</button>


<?php 
while($aq=$rest->fetch()){

$allan=$aq['nom'];

$al="select * from 1er where nom = '$allan'";
$all=$pdo->query($al) or die(mysql_error());

$aj="select * from 2eme where nom = '$allan'";
$alj=$pdo->query($aj) or die(mysql_error());

$av="select * from 3eme where nom = '$allan'";
$alv=$pdo->query($av) or die(mysql_error());?>

<table border=1px solid>
    <thead>
        <tr>
        <td>1er</td>
        <td>2er</td>
        <td>3er</td>
</tr>
    </thead>
    <tbody>
    <tr>

       <td><?php while($ak=$all->fetch()){ if($ak['nom']){?>
       ok <?php }else{ echo"non";} }?> </td>
       <td><?php while($ajj=$alj->fetch()){ if($ajj['nom']){?>
        ok <?php }else{ echo"non";}}?></td>
        <td><?php while($avv=$alv->fetch()){ if($avv['nom']){?>
       ok <?php } else{ echo"non";}}?> </td>
</tr>
<?php }?>
    </tbody>
</table>

</body>
</html>