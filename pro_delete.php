<?php
require_once('dbconnection.php');

//checking name
$id = $_GET["id"];

$query = "DELETE FROM products WHERE ID = '$id'";

if(mysqli_query($conn, $query)){ 
    header('location: mg_products.php');
}
else{
    echo "There was a problem while deleting the Product ".mysqli_error($conn);
}


?>