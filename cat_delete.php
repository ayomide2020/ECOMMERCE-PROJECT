<?php
require_once('dbconnection.php');

//checking name
$id = $_GET["id"];

$query = "DELETE FROM categories WHERE ID = '$id'";

if(mysqli_query($conn, $query)){ 
    header('location: mg_categories.php');
}
else{
    echo "There was a problem while deleting the Category ".mysqli_error($conn);
}


?>