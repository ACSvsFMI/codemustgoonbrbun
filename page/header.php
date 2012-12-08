<?php
echo '
<ul class="nav-bar">
            <li><a href="index.php" class="logo" title="Home Page">Pin my Post</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>';
                if(isset($_SESSION["email"])){
                    echo '<li class="fr"><a href="include/logout.php?logout=1">Logout</a></li>';
                    echo '<li class="fr"><a href="profile.php">'.$_SESSION["email"] . '</a></li>';
                } else {
                    echo '<li class="fr"><a href="register.php">Register</a></li>';
                    echo '<li class="fr"><a href="login.php">Login</a></li>';
                }
echo '</ul>';

?>