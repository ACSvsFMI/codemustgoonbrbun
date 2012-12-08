<?php

include_once 'db_config.php';
global $db;
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])){
    if ($_POST['password'] === $_POST['cpassword']){
        $stmt = "INSERT INTO `user`(`user_name`,`first_name`,`last_name`,`email`,`sex`,`city`,`password`)
                VALUES(:user, :fn, :ln, :e, :s, 'Bucuresti', :p)";
        $query = $db->prepare($stmt);
        $query->bindParam(":user",$_POST['username']);
        $query->bindParam(":fn",$_POST['fname']);
        $query->bindParam(":ln",$_POST['lname']);
        $query->bindParam(":e",$_POST['email']);
        $query->bindParam(":s",$_POST['sex']);
        $query->bindParam(":p",$_POST['password']);
        $query->execute() or die('nu am putut sa inserez in baza de date');
        
        
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        
        header ('Location: ../index.php');
    }
}

?>