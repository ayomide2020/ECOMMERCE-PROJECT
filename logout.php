<?php

require_once ('dbconnection.php');
session_start();

if(isset($_SESSION['profile'])){
    if(session_destroy()){
        header('location:index.php');
    }
}
else{
    echo "You must be logged in first!!!";
}

?>