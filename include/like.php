<?php

require_once 'db_config.php';
global $db;
session_start();
if (isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    $user_id = $_SESSION['id'];
    $stmt = "INSERT INTO likes(fk_p,fk_u)
             VALUES ($post_id,$user_id)";
    $query = $db->prepare($stmt);
    $query->execute();
    header('Location: ../index.php?msj=am_dat_like');
}