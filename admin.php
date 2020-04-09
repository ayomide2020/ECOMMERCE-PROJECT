<!DOCTYPE html>
<html lang="en">

<?php require "session.php" ?>

<?php
    if ($role == 1) {
        header('location:index.php');
    }
?>

<?php require "admin-nav.php" ?>

<h2 class="mt-5 p-3">Welcome <?php echo $username ?></h2>


<div class="container p-5 mt-5" style="background:rgba(0,0,0,0.03); border-radius:10px;">
    <div class="row justify-content-between">
        <div class="col-md-3 text-center about_card">
            <i class="fa fa-cog fa-5x"></i>
            <h6 class="mt-4"><a href="mg_categories.php">MANAGE CATEGORIES</a></h6>
        </div>

        <div class="col-md-3 text-center about_card">
            <i class="fa fa-cog fa-5x"></i>
            <h6 class="mt-4"><a>MANAGE PRODUCTS</a></h6>
        </div>

        <div class="col-md-3 text-center about_card">
            <i class="fa fa-cog fa-5x"></i>
            <h6 class="mt-4"><a>MANAGE USERS</a></h6>
        </div>

    </div>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>