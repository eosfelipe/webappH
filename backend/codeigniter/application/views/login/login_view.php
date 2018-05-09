<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Felipe Escobedo">
  <title>Login - Hyundai</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Iniciar sesión</div>
      <div class="card-body">

        <?php echo form_open('Login/loginUsuario') ?>
          <div class="form-group">
            <!-- <label for="usuario">Usuario</label> -->
            <input class="form-control" id="usuario" name="usuario" type="text" aria-describedby="usuarioHelp" placeholder="Usuario">
          </div>
          <div class="form-group">
            <!-- <label for="password">Password</label> -->
            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary btn-block">Login</button>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo site_url('Home/Register') ?>">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>

    <div class='container' style='margin-top: 100px;'>
        <div class='row'>
            <div class='col-md-4'>
            </div>
            <div class='col-md-4'>
                <div class='panel panel-default'>
                    <div class='panel-body'>
                        <!-- validation message for a successful login -->
                        <?php if ($this->session->flashdata('error')) {?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php  } ?>
                        <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>
