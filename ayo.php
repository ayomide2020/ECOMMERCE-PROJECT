<?php
// require('header.php');
require("dbconnection.php");

if (isset($_POST['update-btn'])) {
//checking name
$id = $_POST["id"];
$category = $_POST["category"];

$query = "UPDATE categories SET CATEGORY_NAME = '$category' where ID = '$id'";

if(mysqli_query($conn, $query)){
    header('location: mg_categories.php');
}
else{
    echo "<strong>There was a problem while Updating</strong>".mysqli_error($conn);
}

}
mysqli_close($conn);

?>
