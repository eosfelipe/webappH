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
    $query = $this->db->query('select * from reporte');
    return $query->result();
  }

  public function getOrden(){
    $query = $this->db->query('select orden from reporte');
    return $query->result();
  }

}
