<?php require "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<body>
         <!-- <enctype="multipart/form-data"> -->

      <div class="container-fluid">
        <div class="row mt-5">
        <div class="col-md-12 col-md-8 col-md-4">
        	<div class="signup-default">
        		<div class="signup-heading">
			    		<h3 class="signup-title">Please Sign up</h3>
			 			</div>

			 			<div class="signup-body">
						 <form action="reg_validation.php" method="POST">
						
						<div class="form-group">
                <label >Fullname</label><span class="error">*</span>
			    				<input type="text" name="fullname" id="fullname" class="form-control input-sm" placeholder="Firstname Lastname">
								<input type="text" name="role_id" value="1" hidden class="form-control input-sm" placeholder="Choose Role">
			    			
								
                
                <label>Username</label><span class="error">*</span>
			    				<input type="username" name="username" id="username" class="form-control input-sm" placeholder="Username">
			    		


			    		
                <label>Email Address</label><span class="error">*</span>
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    

			    			<div class="row">
			    				<div class="col-md-6">
                    <label>Password</label><span class="error">*</span>
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                    </div>
                

			    				<div class="col-md-6">
                    <label>Confirm Password</label><span class="error">*</span>
			    						<input type="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
                                </div>
				
			   <p class="mismatch hide-error" id="mismatch-comment"></p>

                <div>
				<label for="showpassword" class="input-field">
                    <input type="checkbox" name="passwordshow" id="passwordshow">
                    Show Password
                </label>
                 </div>


                  <div>
                    <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
                  <div class="col-md-4">
                    <input id="Upload photo" name="Upload photo" class="input-file" type="file">
                    </div>
                  </div>

			    			
			    			<input type="submit" value="Register" name="RegisterBtn" class="btn btn-info btn-block mt-4">
			    		
			    		</form>
                    </div>

			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>


	<script>
        //bind the page elements to these variables...
        let passwordshow = document.getElementById("passwordshow");
        let password = document.getElementById("password");
        let mismatchError = document.getElementById("mismatch-comment");
        let confirmPassword = document.getElementById("password_confirmation");

        function comparePasswordStrings() {
            if ((confirmPassword.value != "") && (password.value === confirmPassword.value)) {
                mismatchError.classList.add("hide-error");
            } else if ((confirmPassword.value != "") && (password.value != confirmPassword.value)) {
                mismatchError.classList.remove("hide-error");
            }
        }

        function showOrHidePassword() {

            if (passwordshow.checked) {
                //console.log("on");
                password.setAttribute('type', 'text');
                confirmPassword.setAttribute('type', 'text');
            }
            else {
                //console.log("off");
                password.setAttribute('type', 'password');
                confirmPassword.setAttribute('type', 'password');
            }
        }

        //Add a click event listener to the SHOW PASSWORD checkbox...
        document.getElementById("passwordshow").addEventListener("click", showOrHidePassword);
        //Add an input or focusout event listener to the PASSWORD and CONFIRM PASSWORD fields...
        document.getElementById("password").addEventListener("focusout", comparePasswordStrings);
        document.getElementById("password_confirmation").addEventListener("focusout", comparePasswordStrings);


    </script>


    <?php require 'footer.php'; ?>

</body>
</html>