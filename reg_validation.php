 <?php
// require('header.php');
require("dbconnection.php");

if (isset($_POST['RegisterBtn'])) {
//checking name
$FULL_NAME = $_POST["fullname"];
$USERNAME = $_POST["username"];
$EMAIL = $_POST["email"];
$ROLE_ID = $_POST["role_id"];
$HASHEDPASSWORD=password_hash($_POST["password"], PASSWORD_DEFAULT);


// $UPLOAD_PHOTO=$_FILES["upload_photo"]["temp_name"];
// $target="asset/".basename($_FILES['upload_photo']['name']);
// $UPLOAD_PHOTO=$_FILES['upload_photo']['name'];
// move_uploaded_file($upload_photo,$target);

$error= array();
if (empty($_POST[''])){
$error='Fill all fields';
}



$query = "INSERT INTO users (ROLE_ID, FULL_NAME, USERNAME, EMAIL, PASSWORD) VALUES('$ROLE_ID', '$FULL_NAME', '$USERNAME', '$EMAIL', '$HASHEDPASSWORD')";
// }

if(mysqli_query($conn, $query)){
// echo "<h3>You have successfully registered. sign In to continue</h3>";
header('location: sign_in.php');
}
else{
echo "<strong>Registration not successful.<a href='reg_form.php'>Please Sign up again</a></strong>".mysqli_error($conn);
    }
}
mysqli_close($conn);


?>


<!-- // require('dbconnection.php');
// // If form submitted, insert values into the database.
// if (isset($_REQUEST['firstname'])){
//         // removes backslashes
// 	$username = stripslashes($_REQUEST['username']);
//         //escapes special characters in a string
// 	$username = mysqli_real_escape_string($con,$username); 
// 	$email = stripslashes($_REQUEST['email']);
// 	$email = mysqli_real_escape_string($con,$email);
// 	$password = stripslashes($_REQUEST['password']);
// 	$password = mysqli_real_escape_string($con,$password);
// 	$trn_date = date("Y-m-d H:i:s");
//         $query = "INSERT into `users` (username, password, email, trn_date)
// VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
//         $result = mysqli_query($con,$query);
//         if($result){
//             echo "<div class='form'>
// <h3>You are registered successfully.</h3>
// <br/>Click here to <a href='login.php'>Login</a></div>";
//         }
//     }else{ -->


<!-- //  <div class="form">
// <h1>Registration</h1>
// <form name="registration" action="" method="post">
// <input type="text" name="username" placeholder="Username" required />
// <input type="email" name="email" placeholder="Email" required />
// <input type="password" name="password" placeholder="Password" required />
// <input type="submit" name="submit" value="Register" />
// </form>
// </div>
// </body>
// </html> -->


