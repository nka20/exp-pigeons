
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
    <form method="POST" action="table.php" class="form">
        <input type="text" name="nom" placeholder="votre nom"><br>
        <label for="nom">minerval</label>
<input type="int" name="somme" placeholder="votre minerval" class="form-control">
</div>
        <div class="form-group">
<label for="niveau">exoneration:</label>
<select name="exoneration" class="form-control" required="">
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
<option value="1">1er trimestre</option>
<option value="2">2eme trimestre</option>
<option value="3">3eme trimestre</option>
</select>
<button class="btn btn-success" type="submit"> <span class="glyphicon glyphicon-plus">enregistrer</span></button>
<a href="filiere.php" class="btn btn-success">annuler</a>
</form>

</p>votre exemption est de <?php $al=50000; $cal=($al*50)/100; echo $cal; ?></p>

</div>
</div>
 </body>
</html>