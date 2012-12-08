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
        <h1>Profilul meu</h1>
        <h3>Status</h3>
        <form action="include/new_status.php" method="post">
            <textarea name="status" rows="5" cols="60"></textarea>
            <br />
            <input type="submit" value="Publica" class="btn btn-green" />
            
        </form>
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