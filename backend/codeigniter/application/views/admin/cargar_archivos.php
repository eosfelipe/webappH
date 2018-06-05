<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Felipe Escobedo">
  <title>Administración - Hyundai</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url()?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/datatables/buttons.dataTables.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet">
  <!--Fileinput-->
  <link href="<?php echo base_url()?>assets/fileinput/css/fileinput.min.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark sidenav-toggled" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo site_url('admin/index') ?>">Hyundai</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo site_url('admin/index') ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cargar Reporte">
          <a class="nav-link" href="<?php echo site_url('admin/cargar') ?>">
            <i class="fa fa-fw fa-file-excel-o"></i>
            <span class="nav-link-text">Cargar Reporte</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ver Reporte">
          <a class="nav-link" href="<?php echo site_url('admin/verReporte') ?>">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Ver Reporte</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="usuarioDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if(isset($_SESSION['username'])) echo 'Bienvenido '.$_SESSION['username'];?>
          <i class="fa fa-fw fa-user"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="usuarioDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">
            <span class="text-muted">
              <strong><i class="fa fa-fw fa-sign-out"></i>Salir</strong>
            </span>
          </a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col align-self-center">

          <?php if ($this->session->flashdata('success')) {?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <?php echo $this->session->flashdata('success'); ?>
              </div>
          <?php  } ?>

        </div>
      </div>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Cargar reporte de Auto-</li>
      </ol>

      <?php echo form_open_multipart('upload/do_upload');?>
        <input id="input-id" type="file" class="file" name="file[]" data-preview-file-type="text" >
        <small class="form-text text-muted">Seleccionar reporte a cargar</small>
      </form>


    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Hyundai <?php echo date('Y')?></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cerrar sesión</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <!-- <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div> -->
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="<?php echo site_url('Login/logoutUser') ?>">Aceptar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url()?>assets/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.es.min.js"></script>
    <script src="<?php echo base_url()?>assets/fileinput/js/purify.min.js"></script>
    <script src="<?php echo base_url()?>assets/fileinput/js/fileinput.min.js"></script>
    <script src="<?php echo base_url()?>assets/fileinput/js/theme.min.js"></script>
    <script src="<?php echo base_url()?>assets/fileinput/js/es.js"></script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <script>
    $('#input-id').fileinput({
            theme: 'fa',
            language: 'es',
            uploadUrl: 'http://localhost:8080/hyundai/backend/codeigniter/index.php/upload/do_upload',
            allowedFileExtensions: ['csv'],
            maxFileSize: 500,
            maxFileCount: 1,
            uploadAsync: false
        });
    $('#input-id').on('filebatchuploadsuccess', function(event, data) {
      var form = data.form, files = data.files, extra = data.extra,
      response = data.response, reader = data.reader;
      console.log(response);
      if(response.exito){
        setTimeout(function(){location.reload()},3000);
      }
    });
    </script>
  </div>
</body>

</html>
