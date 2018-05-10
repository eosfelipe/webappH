<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->database();
    $this->load->model('Calificacion_model');
  }

  public function index(){
    // $this->load->view('templates/header');
    if ($_SESSION['user_logged'] == FALSE) {
        $this->session->set_flashdata("error","Favor de ingresar credenciales");
        redirect('admin/Login');
    }
    $data['registros'] = $this->Calificacion_model->getRegistros();
    $this->load->view('admin/administracion',$data);
    // $this->load->view('templates/footer');
  }

  public function Login() {
      $this->load->view('login/login_view');
  }

  public function BuscarFecha(){
    if(isset($_POST['fechaInicial']) && isset($_POST['fechaFinal'])){
      //voletea fecha para mysql
      $fechaInicial = date('Y-m-d',strtotime($_POST['fechaInicial']));
      $fechaFinal = date('Y-m-d',strtotime($_POST['fechaFinal']));

      $data['registros'] = $this->Calificacion_model->getRegistrosB($fechaInicial,$fechaFinal);
      $data['fi'] = $_POST['fechaInicial'];
      $data['ff'] = $_POST['fechaFinal'];
      $this->load->view('admin/administracion',$data);
    }
    else{
      $data['registros'] = $this->Calificacion_model->getRegistros();
      $this->load->view('admin/administracion',$data);
    }
  }



}
