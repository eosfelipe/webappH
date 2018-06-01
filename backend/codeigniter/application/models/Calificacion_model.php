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
    date_default_timezone_set('America/Mexico_City');
    foreach ($data as $nombre_campo => $valor_campo) {
      if( property_exists('Calificacion_model',$nombre_campo) ){
        $this->$nombre_campo = $valor_campo;
      }
      $this->orden_servicio = trim($data['ordenServicio']);
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

  public function getRegistros(){
    $hoy = date('Y-m-d');
    // $this->db->like('fecha', $hoy, 'both');
    $query = $this->db->query('select * from calificacion where fecha like "%'.$hoy.'%"');
    return $query->result();
  }

  public function getRegistrosB($fi,$ff){
    $query = $this->db->query('select * from calificacion where fecha between "'.$fi.'" and "'.$ff.' 23:59:00"');
    return $query->result();
  }

  public function exportar($fi,$ff){
    $this->load->dbutil();
    $this->load->helper('file');
    $this->load->helper('download');
    $query = $this->db->query('select * from calificacion where fecha between "'.$fi.'" and "'.$ff.' 23:59:00"');
    $delimiter = ",";
    $newline = "\r\n";
    $enclosure = '"';
    $nombre_archivo = 'resultados_'.$fi.'_'.$ff.'.csv';

    $archivo = $this->dbutil->csv_from_result($query, $delimiter, $newline, $enclosure);
    if(!write_file('./assets/reportes/'.$nombre_archivo,$archivo)){
      return false;
    }
    else{
      force_download('./assets/reportes/'.$nombre_archivo, NULL);
      // redirect('admin/index','refresh');
      return true;
    }
  }
}
