<?php 
require_once("com.php");
$somme= ! empty($_POST['somme']) ? $_POST['somme'] :0;
$exo=! empty($_POST['exoneration']) ? $_POST['exoneration']: 0;
$req="insert into exoneration(somme,exoneration)values ('$somme','$exo')";//excepter pour les int les autres types commme varchard ont les guillemets simple
$resultat=$pdo->query($req) or die(mysql_error());
$sum=($somme*$exo)/100;
$reste=$somme-$sum;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>nouveau filiere</title>
    </head>
    <body>
    
    <div class="container col-lg-8 col-lg-offset-2  col-md-4 col-md-offset-1 "><?//pour les long et le cote en mode normal  et la longeueur et le cote lorqsue on reduit  l ecran/?>
    <div class="panel panel-primary margetop"><?// success et primary= blue relie deux class ensemble panel qui est sur bootstrap et margetop ?>
<div class="panel-heading">veuillez  saisir les donnees </div>
<div class="panel-body">
    <form method="POST" action="calcul_des_exo.php" class="form">
        <div class="form-group">
            <label for="nom">montant</label>
        <input type="int" name="somme" placeholder="votre minerval" required class="form-control">
</div>
<div class="form-group">
<label for="niveau">exoneration:</label>
<select name="exoneration" required="">
<option value="">tous les niveaux</option>
    <option value="0">0%</option>
    <option value="25">25%</option>
    <option value="50">50%</option>
    <option value="100">100%</option>
</select>
</div>
<label for="trim">trim:</label>
<select name="trim" class="form-control" required="">
<option value="">tous les trimestre</option>
    <option value="1er">1er trimestre</option>
    <option value="2eme">2eme trimestre</option>
    <option value="3eme">3eme trimestre</option>
</select>
<button class="btn btn-success" type="submit"> <span class="glyphicon glyphicon-plus">enregistrer</span></button>
<a href="filiere.php" class="btn btn-success">annuler</a>
</form>

</div>
</div>
<?php if(! empty($somme)) {?>
<p>votre reduction est de <?php echo $sum; ?></p><br>
<p>il vous reste a payer  <?php echo $reste; ?></p>
<?php } ?>
 </body>
</html>