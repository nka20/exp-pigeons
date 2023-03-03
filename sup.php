<?php
require "com.php";
$del="delete from taux";
$res=$pdo->query($del) or die(mysql_error());
$al="ALTER TABLE taux AUTO_INCREMENT=1";
$rest=$pdo->query($al) or die(mysql_error());
header("location:allan.php");
?>