<?php
include_once 'db_config.php';

global $db;
session_start();

if (isset($_POST['email']) && isset($_POST['pass'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $stmt = "SELECT `id_u`, `email`, `password`
             FROM    user
             WHERE   `email` = :email";
    
    $query = $db->prepare($stmt);
    
    $query -> bindParam(':email',$email);
    $query -> execute();
    $user_exists = $query -> fetchAll();
    if (count($user_exists) > 0){
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
        $_SESSION['id'] = $user_exists[0]['id_u'];
        header('Location: ../index.php?msg=autentificat_cu_succes');
    } else {
        session_unset();
        header('Location: ../index.php?error=eroare_nu_exista_user_ori_parola_gresita');
    }
}

function is_user(){
    if (isset($_SESSION['email']) && isset($_SESSION['pass'])){
        return true;
    }
}
?>