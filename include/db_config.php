<?php

$db = new PDO('mysql:dbname=db; host=localhost; charset=utf8', 'root', 'dinamo11');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

if(!$db){
    die('Eroare la conectare.' . mysql_error());
}


?>
