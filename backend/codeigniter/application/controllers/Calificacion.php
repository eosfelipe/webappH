<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calificacion extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('Calificacion_model');
  }

  public function index(){
    if(isset($_POST['ordenServicio'])){ //solo peticiones ajax desde la app
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
      // echo '<pre>No existe orden de servicio</pre>';
      show_404();
    }
  }

}
