<!DOCTYPE html>
<html lang="en">

<?php require "session.php" ?>


<?php require "admin-nav.php" ?>

<h2 class="mt-5 p-3">Welcome <?php echo $fullname ?></h2>


<div class="container p-5 mt-5" style="background:rgba(0,0,0,0.03); border-radius:10px;">
    
    <div class="row justify-content-between">

        <?php require_once('./fetch/addProduct.php'); ?>
        
        <table class="table table-light text-center">
            
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">CAT_ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">SIZE</th>
                    <th scope="col">COLOR</th>
                    <th scope="col">STATUS</th>
                    <th scope="col" colspan="2">ACTION</th>
                </tr>
            </thead>

            <tbody>

            
                <?php
                    $getProduct = "SELECT * FROM products";

                    $products = mysqli_query($conn, $getProduct);

                    while($pro = mysqli_fetch_array($products))
                    {
                        ?>

                        <tr>
                            <td> 
                                <?php echo $pro['ID']?>
                            </td>
                        
                            <td> 
                                <?php echo $pro['CATEGORY_ID']?>
                            </td>

                            <td> 
                                <?php echo substr($pro['PRODUCT_NAME'], 0, 40)?>
                            </td>

                            <td> 
                                <?php echo substr($pro['PRODUCT_DESCRIPTION'], 0, 40)?>
                            </td>

                            <td> 
                                <?php echo $pro['PRODUCT_PRICE']?>
                            </td>

                            <td> 
                                <?php echo $pro['PRODUCT_SIZE']?>
                            </td>

                            <td> 
                                <?php echo $pro['PRODUCT_COLOR']?>
                            </td>

                            <td> 
                                <?php echo $pro['PRODUCT_STATUS']?>
                            </td>

                            <td> 
                                <?php echo $pro['DATE']?>
                            </td>

                            <td> 
                                <a href="pro_delete.php?id=<?php echo $pro['ID'];?>">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </a>
                            </td>

                            <td> 
                                <a href="pro_delete.php?id='<?php echo $pro['ID'];?>'">
                                    <button type="button" class="btn btn-primary">
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