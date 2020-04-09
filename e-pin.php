          <!DOCTYPE html>
          <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="Ayomide Adaramaja">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="keywords" content="products, about_us, contact_us">
            <meta name="description" content="this is a web application for ladies wear">
            <title>E_PIN</title>
            <!-- Bootstarp CSS CDN -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
            <!-- Font Awesome CDN -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              
            <link rel="stylesheet" type="text/css" href="asset/css/styless.css">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        </head>
          <body onload='document.form1.text1.focus()'>
          <div class="mail">

          <div class="container">
        <div class="row">
            <form>
                <div class="form-group">
                    <label class="custom-label" for="myPayPin">Create myPay PIN</label>
                    <div class="row">
                        <div class="col-auto">
                            <div class="input-group">
                                <input type="password" class="form-control" id="myPayPin" aria-describedby="pinInfo">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input mt-2" id="showMe">
                                            <label class="form-check-label" for="showMe">Show</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
​
                        </div>
                        <div class="col-auto">
                            <small id="pinInfo" class="form-text text-muted">Your PIN should be 4 digits. It cannot
                                contain repeated or consecutive numbers.</small>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="pinSubmitBtn" disabled>Submit</button>
            </form>
        </div>
    </div>
​

          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            
          <script>
          function showPassword() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }

          function allnumeric(inputtxt)
            {
                var numbers = /^[0-3]+$/;
                if(inputtxt.value.match(numbers))
                {
                alert('Your Registration pin accepted....');
                document.form1.text1.focus();
                return true;
                }
                else
                {
                alert('Please input four digit characters only');
                document.form1.text1.focus();
                return false;
                }
            } 
          </script>



          </body>
          </html>