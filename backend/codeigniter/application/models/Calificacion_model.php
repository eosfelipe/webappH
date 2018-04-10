<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calificacion_model extends CI_Model {

  public $id;
  public $orden_servicio;
  public $p1;
  public $p2;
  public $p3;
  public $p4;
  public $p5;
  public $p6;
  public $p7;
  public $fecha;

  public function set_data( $data ){
    foreach ($data as $nombre_campo => $valor_campo) {
      if( property_exists('Calificacion_model',$nombre_campo) ){
        $this->$nombre_campo = $valor_campo;
      }
      $this->orden_servicio = $data['ordenServicio'];
      $this->p1 = $data['pregunta1'];
      $this->p2 = $data['pregunta2'];
      $this->p3 = $data['pregunta3'];
      $this->p4 = $data['pregunta4'];
      $this->p5 = $data['pregunta5'];
      $this->p6 = $data['pregunta6'];
      $this->p7 = $data['pregunta7'];
      $this->fecha = date('Y-m-d H:i:s');
    }
    return $this;
  }

  public function insert(){
    $hecho = $this->db->insert( 'calificacion', $this );
    if($hecho){
      $respuesta = array(
        'err'=>false,
        'mensaje'=>'Registro insertado correctamente',
        'sucursal_id'=>$this->db->insert_id()
      );
    }else{
      $respuesta = array(
        'err'=>true,
        'mensaje'=>'Error al insertar',
        'error'=>$this->db->_error_message(),
        'error_num'=>$this->db->_error_number()
      );
    }
    return $respuesta;
  }
}
