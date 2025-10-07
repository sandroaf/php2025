<?php 
    session_start();

    if (isset($_POST["bapagarmoradores"])) {
        session_unset();
        session_destroy();
    }
    header("location:index.php");