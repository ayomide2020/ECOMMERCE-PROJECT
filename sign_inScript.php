<?php
require('dbconnection.php');
session_start();

if(isset($_POST["signin"]))
{

    // Accepts form input
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, $_POST['password']);

   

    // Checks the database for the user
    $sql = "SELECT *  FROM `users` WHERE `EMAIL` = '$email'";
    $query = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($query);

    if($num_rows === 1)
     {

        while($row = mysqli_fetch_array($query))
        {
   
           /**
            * Verify the password that the user has entered
            */ 
  
            if(password_verify($password, $row['PASSWORD']))
                {
                    $id = $row['ID'];
                   // Declare a session variable and set the fetched email into it.
                   $_SESSION["profile"] = $row['EMAIL'];

                   if($row['ROLE_ID'] == 1){
                    header("location:index.php?user=$id");
                   }
                   else{
                    header("location:admin.php?user=$id");
                   }
               }
               else
               {
                //    header('location:../index.php');
                    echo "invalid username or password";
               }
           }
   
       }
   
   }
   ?>