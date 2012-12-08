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
        <div class="container6">
            <div class="box-title">
                <h2>Register</h2>
            </div>
            <div class="box-content clearfix">
                <form action="include/register.php" method="post" class="register-form">
                    <label for="username">Username:</label>
                    <input type="text" name="username" required="required" />
                    <br />
                    <label for="username">Firstname:</label>
                    <input type="text" name="fname" required="required" />
                    <br />
                    <label for="username">Lastname:</label>
                    <input type="text" name="lname" required="required" />
                    <br />
                    <label for="sex">Sex:</label>
                    <select name="sex" required="required" >
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                    <br />
                    <br />
                    <label for="email">Email:</label>
                    <input type="email" name="email"  required="required" />
                    <br />
                    <label for="password">Password</label>
                    <input type="password" name="password" required="required" />
                    <br />
                    <label for="cpassword">Password confirm</label>
                    <input type="password" name="cpassword" required="required"  />
                    <input type="submit" class="btn btn-green fr" value="Register"/>
                </form>
            </div>
        </div>
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