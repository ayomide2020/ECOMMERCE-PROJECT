<?php
//  require 'dbconnection.php';
 ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ayomide Adaramaja">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="products, about_us, contact_us">
    <meta name="description" content="this is a web application for ladies wear">
    <title>Document</title>
    <!-- Bootstarp CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <link rel="stylesheet" type="text/css" href="asset/css/styless.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
</head>
<body>
<!-- header starts -->

<nav class="navbar navbar-expand-lg navbar-light bg-white p-4">
  <a class="navbar-brand" href="index.php">UNIQUE LADIES APPAREL</a>
  
    <ul class="navbar-nav ml-auto bg-white">
      <li class="nav-item">
        <a class="nav-link mr-lg-5" href="sign_in.php"> <i class="fa fa-sign-in"></i> Sign In <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link mr-lg-5" href="reg_form.php"> <i class="fa fa-user-plus"></i>  Create an Account</a>
      </li>
    </ul>
    
    <form class="d-flex my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-sm-0" type="submit">Search</button>
    </form>
</nav>

<!-- header ends -->



<!-- Navbar Starts -->

<nav class="navbar navbar-expand-lg bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars text-white"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto justify-content-center">
      <li class="nav-item active">
        <a class="text-white nav-link mr-5" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="text-white nav-link mr-5" href="#about_us">About</a>
      </li>
      <li class="nav-item">
        <a class="text-white nav-link mr-5" href="#contact-us">Contact</a>
      </li>
      <li class="nav-item">
        <a class="text-white nav-link mr-5" href="categories.php">Categories</a>
      </li>
      <li class="nav-item">
        <a class="text-white nav-link mr-5" href="reg_form.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="text-white nav-link mr-5" href="sign_in.php">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="text-white nav-link mr-5" href="logout.php">Log Out</a>
      </li>
    </ul>
  </div>
</nav>


<!-- Navbar Ends -->