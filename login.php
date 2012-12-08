<?php 
include 'include/db_config.php';
include 'include/login.php';

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
        <form action="include/login.php" method="post" class="register-form">
            <label>Email:</label>
            <input type="email" name="email" />
            <br />
            <label>Password:</label>
            <input type="password" name="pass" />
            <br />
            <input type="submit" class="btn btn-green fr" />
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