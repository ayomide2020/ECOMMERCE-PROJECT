
<?php
$servername= "localhost";
$username= "root";
$password= "ayo";
$dbname= "ecommerce_project";
//Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if(!$conn){
    die("connection failed:" .mysqli_connect_error());
}
else{
// echo "connection successful";

}

?>
    
