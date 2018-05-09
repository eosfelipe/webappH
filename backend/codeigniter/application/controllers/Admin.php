<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model('Calificacion_model');
  }

  public function index(){
    // $this->load->view('templates/header');
    $data['registros'] = $this->Calificacion_model->getRegistros();
    $this->load->view('admin/administracion',$data);
    // $this->load->view('templates/footer');
  }

  // public function getOrdenesFecha(){
  //   $data = $this->Calificacion_model->getRegistros();
  //   return $data;
  //   // foreach($data as $row){
  //   //     echo $row['ordenServicio'];
  //   //     echo $row['p1'];
  //   //     echo $row['p2'];
  //   //     echo $row['p3'];
  //   //     echo $row['p4'];
  //   //     echo $row['p5'];
  //   //     echo $row['p6'];
  //   //     echo $row['p7'];
  //   //     echo $row['fecha'];
  //   //   }
  //   //   echo 'Registros totales: ' . $query->num_rows();
  // }
}
