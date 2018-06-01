<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte_model extends CI_Model {

  public $DISTRIB;
  public $RAZON;
  public $CIUCLIEN;
  public $NUMSERIE;
  public $TIPORDEN;
  public $OPER1;
  public $ORDEN;
  public $CLIENTE;
  public $TELCASA;
  public $TELOFIC;
  public $TELCEL;
  public $EMAIL;
  public $ASESOR;
  public $RFCASESOR;
  public $DESCRIP;

  public function getRegistros(){
    // $query = $this->db->query('select * from reporte');
    $query = $this->db->query('select c.orden_servicio,c.p1,c.p2,c.p3,c.p4,c.p5,c.p6,c.p7,r.DISTRIB,r.RAZON,r.CIUCLIEN,r.NUMSERIE,r.TIPORDEN,r.OPER1,r.ORDEN,r.CLIENTE,r.TELCASA,r.TELOFIC,r.TELCEL,r.EMAIL,r.ASESOR,r.RFCASESOR,r.DESCRIP
                                from reporte r
                                left join calificacion c
                                on r.orden like concat("%",c.orden_servicio,"%")');
    return $query->result();
  }

  public function getOrden(){
    $query = $this->db->query('select orden from reporte');
    return $query->result();
  }

  public function exportar(){
    $this->load->dbutil();
    $this->load->helper('file');
    $this->load->helper('download');
    $query = $this->db->query('select c.orden_servicio,c.p1,c.p2,c.p3,c.p4,c.p5,c.p6,c.p7,r.DISTRIB,r.RAZON,r.CIUCLIEN,r.NUMSERIE,r.TIPORDEN,r.OPER1,r.ORDEN,r.CLIENTE,r.TELCASA,r.TELOFIC,r.TELCEL,r.EMAIL,r.ASESOR,r.RFCASESOR,r.DESCRIP
                                from reporte r
                                left join calificacion c
                                on r.orden like concat("%",c.orden_servicio,"%")');
    $delimiter = ",";
    $newline = "\r\n";
    $enclosure = '"';
    $nombre_archivo = 'reporteCal_'.date('d-m-Y').'.csv';

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
