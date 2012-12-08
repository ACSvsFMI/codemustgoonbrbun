<?php 
include 'include/db_config.php';
include 'include/login.php';

if (!is_user()){
    header('Location: login.php?msj=trebuie_sa_te_autentifici');
    exit;
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="nav">
        <?php include 'page/header.php' ?>
    </div>
</header>
<div class="main">
    <div class="wrap">
        <h1>News feed</h1>
        <?php include 'page/my_feed.php'; ?>
    </div>
</div>
<footer>
    <div class="wrap">
        <div class="outer-center">
            <div class="inner-center">
                &copy; 2012 Code must go on &lt;br /&gt  
            </div>
        </div>
    </div>
</footer>    
</body>

</html>