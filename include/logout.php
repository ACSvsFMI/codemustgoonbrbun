<?php
require_once 'db_config.php';
session_start();
if (isset($_GET['logout'])){
    session_destroy();
    header('Location: ../login.php?logout=success');
}
?>