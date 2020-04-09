<?php
    include ('dbconnection.php');
    session_start();


    if (!isset($_SESSION["profile"])) {
        header('location:index.php');
    }

    $email = $_SESSION["profile"];

    $query = " SELECT * FROM users where EMAIL = '$email' ";
    $sql = mysqli_query($conn , $query);
    $row = mysqli_fetch_array ($sql, MYSQLI_ASSOC);
    
    $fullname = $row['FULL_NAME'];
    
    $email = $row['EMAIL'];
    
    $password = $row['PASSWORD'];
    
    $username = $row['USERNAME'];

    $role = $row['ROLE_ID'];


    
    // $picture = "<img src='photo/".$row['picture']." 
    // alt='image'image'>";
    
    // // $_FILES ['image'] ['name'];
   
?>














