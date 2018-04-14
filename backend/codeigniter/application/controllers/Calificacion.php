<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calificacion extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('Calificacion_model');
  }

  public function index(){
    if(isset($_POST['ordenServicio'])){
      $ordenS = $this->Calificacion_model->set_data( $_POST );
      if(is_object($ordenS)){
        $respuesta = $ordenS->insert();
        if( $respuesta['err'] ){
          echo 'mal';
        }else{
          echo 'ok';
        }
      }
      else{
        'Tiene campos null';
      }
    }
    else{
      echo 'No existe Orden de servicio';
    }
  }

}
