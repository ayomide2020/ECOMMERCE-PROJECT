<?php 
require 'dbconnection.php';
session_start();
if (isset($_GET['user']))
{
$user = $_GET['user'];
$get_user = $mysqli->query("SELECT * FROM users WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
           
}
       
} 
?>
    <!DOCTYPE html>
    <html lang="en">    
    <head>        
        <meta charset="UTF-8">
    <title><?php echo $profile_data['username'] ?>'s Profile</title>
    </head>

    <?php require 'header.php'; ?>

    <div class="container-fluid my-5">
    <div class="card" width="100%;">
    <img src="asset/css/images/dashimg.jfif" class="card-img-top rounded-circle alt=profile">

        <!-- Material form contact -->
    <div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>User Profile</strong>
    </h5>


<div class="card-body">

<!-- <form style="color: #757575;" action="#!"> -->
<!--Card content-->
<body>
    <a href="index.php">Home</a>  <?php echo $profile_data['username'] ?>'s Profile        
    <h3>Personal Information | <?php $username = $_SESSION['username'];
           if ($user == $username)
           {?>
           <a href="edit-profile.php?user=<?php echo $profile_data['username'] ?>">Edit Profile</a><?php
}
        ?>        
        </h3>        
        <table>
                    <tr>                
                    	<td>Name:</td><td><?php echo $profile_data['full_name'] ?></td>   
                    </tr>
                    <tr>                
                    	<td>Age:</td><td><?php echo $profile_data['age'] ?></td> 
                    </tr> 
                    <tr>
                        <td>Gender:</td><td><?php echo $profile_data['gender'] ?></td>
                    </tr>
                    <tr>
                        <td>Address:</td><td><?php echo $profile_data['address'] ?></td> 
                    </tr>        
        </table> 
?>

</div>
</div>
</div>
</div>
<!-- Material form contact --> 
</div>


<?php require 'footer.php'; ?>
</body>
</html>