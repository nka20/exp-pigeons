<?php
try{
    $pdo=new PDO("mysql:host=localhost;
    dbname=exp","allan20","allan20");
}catch(exception $e){///$e c est une erreur

    die('erreur de connexion:'.$e->getmessage());//erreur---  ni nk page $e->--- progrmmer message de erreur
}

?>