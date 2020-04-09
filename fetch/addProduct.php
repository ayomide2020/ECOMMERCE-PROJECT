<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-plus"></i> Add New
</button>



<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
            <form action="" method="POST">
                <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Enter Product Description">
            </div>
        </div>
    </div>


                <div class="form-group">
                    <?php require_once('./fetch/categories.php');?>
                    
                    <select name="cat" class="form-control">                    
                        <?php 
                        while($cat = mysqli_fetch_array($categories))
                        {
                        ?>
                            <option value="<?php echo $cat['ID'] ?>"><?php echo $cat['CATEGORY_NAME'] ?></option>
                        <?php 
                        }
                        ?>
                    </select>
                </div>
            
                <div class="form-row">
                    <div class="col-md-6">               
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="Enter Product Price">
                </div>
            </div>
        
                    <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="image" class="form-control" placeholder="Enter Product Image">
                </div>
            </div>
        </div>
            
        <div class="form-row">
                    <div class="col-md-6">               
                <div class="form-group">
                    <input type="text" name="size" class="form-control" placeholder="Enter Product Size">
                </div>
                </div>

                <div class="col-md-6">               
                <div class="form-group">
                    <input type="text" name="color" class="form-control" placeholder="Enter Product Color">
                </div>
                </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6">               
                <div class="form-group">
                    <input type="text" name="status" class="form-control" placeholder="Enter Product Status">
                </div>
                </div>
                </div>

            </div>
      
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <input type="submit" name="addProduct" value="Add Product" class="btn btn-primary"/>
            </div>
        </form>

    </div>
  </div>
</div>


<?php

    if (isset($_POST['addProduct'])) {

        //checking name
        $product = $_POST["product_name"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $image = $_POST["image"];
        $size = $_POST["size"];
        $color = $_POST["color"];
        $status = $_POST["status"];
        $cat_id = intval($_POST["cat"]);


        $query = "INSERT INTO `products` (CATEGORY_ID, PRODUCT_NAME, PRODUCT_DESCRIPTION, PRODUCT_PRICE, PRODUCT_IMAGE, PRODUCT_SIZE, PRODUCT_COLOR, PRODUCT_STATUS, DATE) VALUES('$cat_id', '$product', '$description', '$price', '$image', '$size', '$color', '$status', now())";

        if(mysqli_query($conn, $query)){    
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success !</strong> Product Added Successfully
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php
        }
        else{
            echo "There was a problem while adding the Product ".mysqli_error($conn);
        }

    }

?>