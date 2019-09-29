<?php

    print_r($_SESSION);
    session_start();

    if(isset($_SESSION)){
        session_destroy();
        header('Location: ../index.php');
    } else {
        header('Location: ../index.php');
    }
?>