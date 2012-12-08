<?php
require_once 'db_config.php';
session_start();
global $db;
if(isset($_POST['status'])){
    $status = $_POST['status'];
    $stmt = "INSERT INTO posts(fk_u,tip,permission,contents)
             VALUES      ($_SESSION[id],0,0,'$status')";
    $query = $db->prepare($stmt);
    $query->execute() or die('nu am putut sa updatez statusul');
    header('Location: ../index.php?msj=status_updatat');
}



?>