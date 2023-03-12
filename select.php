<?php
$section=isset($_POST['section']) ? $_POST['section'] :"";
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
    <form action="select.php" method="POST">

    <select name="section" onchange="this.form.submit()">
        <option>tous les niveaux</option>
            <option value="prim"<?php if($section==="prim") echo "selected"?>>primaire</option>
            <option value="mater"<?php if($section==="mater") echo "selected"?>>maternelle</option>

</select>

    <select required="">
        <option value="">tous les niveaux</option>
            <option value="0">1</option>
            <option value="25">2</option>
            <option value="50">3</option>
<?php if($section==="prim") { ?>
            <option value="100">4</option>
            <option value="0">5</option>
            <option value="25">6</option>
            <option value="50">7</option>
            <option value="100">8</option>
            <?php } ?>
        </select>
        <button type="submit">send</button>
        </form>
</body>
</html>

