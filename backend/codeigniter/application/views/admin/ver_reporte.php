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
        <li class="breadcrumb-item active">Comparación reporte AutoTec vs Encuestas a clientes</li>
      </ol>
      <div class="row" id="exportarMatch">
        <div class="col-md-2 offset-md-10">
        <a style="margin-bottom:10px;" class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#exportarModal"><i class="fa fa-fw fa-file-excel-o"></i>Exportar reporte</a>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <?php $cc=0; $sc=0; foreach($registros as $el){if(isset($el->orden_servicio)) $cc++;else $sc++;}?>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-cc-tab" data-toggle="tab" href="#nav-cc" role="tab" aria-controls="nav-cc" aria-selected="true">Orden con calificación <span class="badge badge-pill badge-primary"><?php echo $cc?></span></a>
              <a class="nav-item nav-link" id="nav-sc-tab" data-toggle="tab" href="#nav-sc" role="tab" aria-controls="nav-sc" aria-selected="false">Orden sin calificación <span class="badge badge-pill badge-primary"><?php echo $sc?></span></a>
              <a class="nav-item nav-link" id="nav-email-tab" data-toggle="tab" href="#nav-email" role="tab" aria-controls="nav-email" aria-selected="false">Enviar por correo</a>
            </div>
          </nav>
        </div>
        <div class="card-body">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-cc" role="tabpanel" aria-labelledby="nav-cc-tab">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTableR" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ORDEN</th>
                    <th>CLIENTE</th>
                    <th>TELCEL</th>
                    <th>EMAIL</th>
                    <th>ASESOR</th>
                    <th>DESCRIP</th>
                    <th>Encuesta</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($registros as $e):?>
                    <?php if(isset($e->orden_servicio)):?>
                    <tr>
                      <td><?php echo $e->ORDEN ?></td>
                      <td><?php echo $e->CLIENTE ?></td>
                      <td><?php echo $e->TELCEL ?></td>
                      <td><?php echo $e->EMAIL ?></td>
                      <td><?php echo $e->ASESOR ?></td>
                      <td><?php echo $e->DESCRIP ?></td>
                      <td><?php echo isset($e->orden_servicio) ? '<i class="fa fa-check-circle-o" aria-hidden="true"></i>':'<i class="fa fa-times-circle-o" aria-hidden="true"></i>' ?></td>
                    </tr>
                    <?php endif;?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
            </div>
            <div class="tab-pane fade" id="nav-sc" role="tabpanel" aria-labelledby="nav-sc-tab">
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTableR2" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ORDEN</th>
                    <th>CLIENTE</th>
                    <th>TELCEL</th>
                    <th>EMAIL</th>
                    <th>ASESOR</th>
                    <th>DESCRIP</th>
                    <th>Encuesta</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($registros as $e):?>
                    <?php if(!isset($e->orden_servicio)):?>
                    <tr>
                      <td><?php echo $e->ORDEN ?></td>
                      <td><?php echo $e->CLIENTE ?></td>
                      <td><?php echo $e->TELCEL ?></td>
                      <td><?php echo $e->EMAIL ?></td>
                      <td><?php echo $e->ASESOR ?></td>
                      <td><?php echo $e->DESCRIP ?></td>
                      <td><?php echo isset($e->orden_servicio) ? '<i class="fa fa-check-circle-o" aria-hidden="true"></i>':'<i class="fa fa-times-circle-o" aria-hidden="true"></i>' ?></td>
                    </tr>
                    <?php endif;?>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
            </div>
            <div class="tab-pane fade" id="nav-email" role="tabpanel" aria-labelledby="nav-email-tab">
              <div class="alert alert-warning" role="alert">
                <input id="sc" type="hidden" value="<?php echo $sc?>">
                Al dar click en <strong>"Enviar encuesta"</strong> se enviaran <?php echo $sc?> correos, favor de esperar a ser redirigido a la página de nuevo.
              </div>
                <div class="progress" style="display:none;">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 1%"></div>
                </div><br>
              <?php echo form_open('Correo/enviar') ?>
              <input type="hidden" name="enviar_correo" value="1">
              <button id="ee" type="submit" class="btn btn-primary" onclick="verBarra(event)">Enviar encuesta</button>
              <?php echo form_close() ?>
            </div>
          </div><!--Fin tab-content-->
        </div>
        <div class="card-footer small text-muted"><?php echo date('d-m-Y')?></div>
      </div>
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
    <!-- Exportar Modal-->
    <div class="modal fade" id="exportarModal" tabindex="-1" role="dialog" aria-labelledby="exportarModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" id="datePM">
          <div class="modal-header">
            <h5 class="modal-title" id="exportarModalLabel">Exportar reporte</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php echo form_open('admin/ExportarReporte') ?>
          <div class="modal-body">
            <div class="form-group">
              <input type="hidden" name="er" value="1">
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Aceptar</button>
          </div>
          <?php echo form_close() ?>
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
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <script>
    function verBarra(e){
      $('.progress').show(function(){
        tiempo = $('#sc').val();
        i=1;
        setInterval(function(){
          $('.progress .progress-bar').css("width",function(){
            if(i < tiempo) return i + "%";
          });
          i++;
        },1000);
      });
    }
    </script>
  </div>
</body>

</html>
