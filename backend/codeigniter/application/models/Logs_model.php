<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs_model extends CI_Model {
  public $id;
  public $accion;
  public $fecha;

  public function insertar_log($valor){
    date_default_timezone_set('America/Mexico_City');
    switch ($valor) {
      case 0:
        $data = array('accion'=>'Ingresó al sistema como: '.$_SESSION['username'],'fecha' =>date('Y-m-d H:i:s'));
        $this->db->insert('logs',$data);
        break;
      case 1:
        $data = array('accion'=>'Envío de encuestas','fecha' =>date('Y-m-d H:i:s'));
        $this->db->insert('logs',$data);
        break;
      case 2:
        $data = array('accion'=>'Cargó archivo AutoTec al sistema','fecha' =>date('Y-m-d H:i:s'));
        $this->db->insert('logs',$data);
        break;
      default:
        // code...
        break;
    }
  }
}
