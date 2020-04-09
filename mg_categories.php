<!DOCTYPE html>
<html lang="en">

<?php require "session.php" ?>

<?php
    if ($role == 1) {
        header('location:index.php');
    }
?>

<?php require "admin-nav.php" ?>

<h2 class="mt-5 p-3">Welcome <?php echo $fullname ?></h2>


<div class="container p-5 mt-5" style="background:rgba(0,0,0,0.03); border-radius:10px;">
    
    <div class="row justify-content-between">

        <?php require_once('./fetch/addCategory.php'); ?>
        
        <table class="table table-light text-center">
            
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DATE</th>
                    <th scope="col" colspan="2">ACTION</th>
                </tr>
            </thead>

            <tbody>

                <?php
                require_once('./fetch/categories.php');

                    while($cat = mysqli_fetch_array($categories))
                    {
                        ?>

                        <tr>
                            <td> 
                                <?php echo $cat['ID']?>
                            </td>
                        
                            <td> 
                                <?php echo $cat['CATEGORY_NAME']?>
                            </td>

                            <td> 
                                <?php echo $cat['DATE']?>
                            </td>

                            <td> 
                                <a href="cat_delete.php?id=<?php echo $cat['ID'];?>">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </a>
                            </td>

                            <td> 
                                <a href="cat_edit.php?id=<?php echo $cat['ID'];?>">
                                    <button type="button" class="edit_btn btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
                            </td>
                            
                        </tr>

                        <?php 
                    }
                ?>

            </tbody>
        
        </table>

    </div>

</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>