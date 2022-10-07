<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/login/fonts/icomoon/style.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/owl.carousel.min.css'); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/bootstrap.min.css'); ?> ">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/style.css'); ?>">

    <title>Login #2</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/login/images/aka.png');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>AKAGYM Member</strong></h3>
            <p class="mb-4">Sistem Informasi Member pada AKAGYM Berbasis Web Application.</p>
            <form action="<?php echo base_url('login/autentikasi'); ?>" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" id="password">
              </div>
              
            

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="<?php echo base_url('assets/login/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/login/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/login/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/login/js/main.js'); ?>"></script>
  </body>
</html>
