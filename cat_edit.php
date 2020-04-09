<?php 
require_once('dbconnection.php');
//checking name
	if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $query = "SELECT * FROM categories WHERE ID = '$id'";
        
        $categories = mysqli_query($conn, $query);

        while($cat = mysqli_fetch_array($categories)) { ?>
            <form action="ayo.php" method="POST">
                <input type="text" name="category" value='<?php echo $cat['CATEGORY_NAME']; ?>'/>
                <input type="hidden" name="id" value='<?php echo $cat['ID']; ?>'/>
                <input type="submit" name="update-btn" value="Update">
            </form>

        <?php
        }
        
}
?>