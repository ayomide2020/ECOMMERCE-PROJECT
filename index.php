<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>  

<div class="container-fluid m-0 p-0">

    <div class="row container-fluid m-0 p-0">

        <div class="col-md-3">

            <!-- categories starts-->
            <div class="card">
                <div class="card-header">
                    <h4<a class="text-black" href="categories.php">Categories</a></h4>
                </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#about">Bags</a></li>
                <li class="list-group-item"><a href="#about">Shoes</a></li>
                <li class="list-group-item"><a href="#about">Accessories</a></li>
                <li class="list-group-item"><a href="#about">Clothes</a></li>
                <li class="list-group-item"><a href="#about">Cosmetics</a></li>
                <li class="list-group-item"><a href="#about"></a></li>
            </ul>
            </div>
            <!-- categories ends -->
        
        </div>


        <div class="col-md-9 p-0">
                
            <!-- carousel starts -->      
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
        
                <div class="carousel-inner">
                
                    <div class="carousel-item active">
                        <img src="asset/css/images/CLOTH8.jpg" height="600" class="d-block w-100" alt="WEARS">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="asset/css/images/CLOTH9.jpg" height="600" class="d-block w-100" alt="WEARS">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="asset/css/images/CLOTH8.jpg" height="600" class="d-block w-100" alt="WEARS">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            
            </div>
            <!-- carousel ends -->
                
        </div>

    </div> <!-- row -->

</div> <!-- container-fluid -->



<!-- carousel ends -->



<!-- About_us starts -->

<section class="about-section text-center" id="about_us">
<h1>About Us<h1>
<p class="about_intro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero dignissimos inventore! Nulla et totam quidem dolore corporis. Eveniet laboriosam tempore dicta sunt necessitatibus architecto iure similique alias distinctio praesentium!</p>


  <div class="container-fluid p-4">

    <div class="row p-4">

        <div class="col-md-4 text-center about_card">
            <i class="fa fa-cog"></i>
            <h3>Who we are.</h3>
            <p class="about_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, rem? Sed similique aliquam velit id tempore a nisi. Natus accusamus praesentium tempore sit doloremque vitae ad quisquam debitis dignissimos atque.</p>
        </div>

        <div class="col-md-4 text-center about_card">
            <i class="fa fa-cog"></i>
            <h3>Who we are.</h3>
            <p class="about_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, rem? Sed similique aliquam velit id tempore a nisi. Natus accusamus praesentium tempore sit doloremque vitae ad quisquam debitis dignissimos atque.</p>
        </div>

        <div class="col-md-4 text-center about_card">
            <i class="fa fa-cog"></i>
            <h3>Who we are.</h3>
            <p class="about_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, rem? Sed similique aliquam velit id tempore a nisi. Natus accusamus praesentium tempore sit doloremque vitae ad quisquam debitis dignissimos atque.</p>
        </div>

    </div>

  </div>
    
 
</section>





<!-- Contact Section -->

<div class="container-fluid text-white col-md-6 p-0 mt-5" id="contact-us">
  <div class="overlay p-5">
    
    <h1>Contact Us</h1>

    <form action="" method="POST" class="needs-validation mt-4" novalidate>
        
        <div class="form-row">
          
          <div class="col-md-6 mb-3">
            <label for="firstname">First name</label>
            <input type="text" class="form-control" id="firstname" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="lastname">Last name</label>
            <input type="text" class="form-control" id="lastname" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

        </div>


        <div class="form-row">
          
          <div class="col-md-6 mb-3">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

        </div>


        <div class="form-row">
          
          <div class="col-md-12 mb-3">
            <label for="notes">Email Address</label>
            <textarea id="notes" class="form-control" rows="8"></textarea>
              <div class="valid-feedback">
                Looks good!
              </div>
          </div>

        </div>

        <div class="form-row justify-content-center mt-3">
          <input type="submit" value="SEND MESSAGE" class="btn btn-primary">
        </div>

    </form>

  </div>

</div>

<!-- Contact Section -->

<?php require 'footer.php'; ?>

 
<!-- <script src="src/JS/contact.js"></script> -->
</body>
</html>






