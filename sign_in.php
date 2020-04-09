<?php require "header.php" ?>
<!DOCTYPE html>
<html lang="en">

<body style="background-color: ;">
<fieldset  class="p-5 mt-5">
      <legend class="text-center mt-5">SIGN IN</legend>
         
        <form class="needs-validation" novalidate method="POST" action="sign_inScript.php">
    <div class="form-group">
        <label for="inputEmail" class="text-white">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
        <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="text-white">Password</label>
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
        <div class="invalid-feedback">Please enter your password to continue.</div>
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox" class="text-white"> Remember me</label>
    </div>
    <button type="submit" name="signin" class="btn btn-info">Sign in</button>
</fieldset>
</form>



<script>
    // Self-executing function
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>


<?php require 'footer.php'; ?>
</body>

</html>




























<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>
<?php
 //define variables and set to empty values
//  $firstNameErr = $lastName = $emailErr = $usernameErr = $passwordErr = "";
//  $firstName = $lastName = $email = $username = $password = "";
//  if ($_SERVER["REQUEST_METHOD"] == "POST"){
// if (empty($_POST["name"])){
// $nameErr = "Name is required";
// }
//  else{
//   $name = test_input($_POST["name"]);
//   //check if name only contains letter and white space
//   if(!preg_match("/^[a-zA-Z]))
//  }

?>
    
</body>
</html>
