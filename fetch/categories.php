<?php
    include ('dbconnection.php');

    $getCategories = "SELECT * FROM categories";

    $categories = mysqli_query($conn, $getCategories);
    
?>