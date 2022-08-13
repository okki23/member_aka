<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page - Member AKAGYM Fitness</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/backend/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/backend/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                      <br> 
                                      <br>
                                      <br>
                                      <br>
                                      <br> 
                                      <br>
                                      <br>
                                      <br>
                                        <h1 class="h4 text-gray-900 mb-4">AKAGYM Fitness Application</h1>
                                    </div>
                                    <form class="user" action="<?php echo base_url('login/autentikasi'); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input name="username" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Username">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukkan Password">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block"> Masuk </button>
                                        <br> 
                                      <br>
                                      <br>
                                      <br>
                                      <br> 
                                      <br>
                                      <br>
                                      <br>
                                      <div align="center"> 
                                      <b style="text-align:center;"> &copy;2022 | AKAGYM Fitness </b>

                                      </div>
                                    
                                    </form>
                                      
                                      
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/backend/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/backend/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/backend/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/backend/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>