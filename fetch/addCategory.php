<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-plus"></i> Add New
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        <form action="" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="category" class="form-control" placeholder="Enter Category Name">
                </div>
            </div>
      
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <input type="submit" name="addCategory" value="Create" class="btn btn-primary"/>
            </div>
        </form>

    </div>
  </div>
</div>


<?php

    if (isset($_POST['addCategory'])) {

        //checking name
        $category = $_POST["category"];
        
        $query = "INSERT INTO categories (CATEGORY_NAME, DATE) VALUES('$category', now())";

        if(mysqli_query($conn, $query)){    
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success !</strong> Category Created Successfully
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php
        }
        else{
            echo "There was a problem while creating the Category ".mysqli_error($conn);
        }

    }

?>