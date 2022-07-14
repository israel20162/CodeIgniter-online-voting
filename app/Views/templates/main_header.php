<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css') ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css') ?>" type="text/css">
  <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
  <main class="main-banner">


    <nav class="navbar fixed navbar-expand-lg navbar-dark scrolling-navbar border-1 border-botto">
      <div class="container my-lg-2">

        <!-- Brand -->
        <a class="navbar-brand h-25" href="/" target="">
          <!-- <img src="https://picsum.photos/id/684/600/400" class="nav-img " alt=""> -->
          <strong style="color: orange;">online voting</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item ">
              <a class="nav-links" href="/">Home

              </a>
            </li>
            <li class="nav-item">
              <a class="nav-links contest" href="contests" target="">Contests</a>
            </li>
            <li class="nav-item">
              <a class="nav-links" href="about" target="">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-links" href="/contact" target="">Contact Us</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons  d-flex gap-1 gap-lg-0">

            <li class="nav-item  pt-2">

              <a class="nav-links " href="login">Login</a>


            </li>
            <li class="nav-item me-">
              <a href="/sign-up" style='border-radius:50px !important;padding:auto auto !important;color:black !important;' class="nav-links border border-light b px-3 btn-warning btn text-black rounded " target="_blank">
                Sign Up
              </a>
            </li>

          </ul>

        </div>

      </div>
    </nav>



    <!--    
        <nav class="navbar navbar-expand-sm navbar-light fixed-top text-white border-1 border-bottom border-opacity-75 border-dark " style="background-color: transparent;padding:10px auto;">
            <div class="container-fluid py-3">
                <a class="navbar-brand" href="#">primary</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarID">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse container d-flex" id="navbarID">
                    <div class="row   justify-between justify-self-center d-flex mx-auto" 
                    style="justify-content: space-between;gap:96px;">
                    <div class=" d-flex col-6 mx-5 ">
                        <div class="navbar-nav px-5">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            
                        </div>
                        <div class="navbar-nav px-5">
                            <a class="nav-link active"  href="#">Contests</a>
                            
                        </div>
                        <div class="navbar-nav px-5">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                            
                        </div>
                    </div>
                    <div class="  col-2 d-flex justify-content-end jus " style="justify-self: end;">
                        
                        <div class="navbar-nav pl-5">
                            <a class="nav-link active"  href="#">Login</a>
                            
                        </div>
                        <div class="navbar-nav ">
                            <a class="nav-link active"  href="#"><button class="btn btn-dark " style="width:max-content">Sign up</button></a>
                            
                        </div>
                      
                    </div>
                    
                    </div>
                </div>
            </div>
        </nav> -->




  </main>