<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->database();
    $this->load->model('Calificacion_model');
    $this->load->model('Reporte_model');
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

  public function cargar(){
    if ($_SESSION['user_logged'] == FALSE) {
        $this->session->set_flashdata("error","Favor de ingresar credenciales");
        redirect('admin/Login');
    }
    // $data['registros'] = $this->Calificacion_model->getRegistros();
    $this->load->view('admin/cargar_archivos');
  }

  public function verReporte(){
    if ($_SESSION['user_logged'] == FALSE) {
        $this->session->set_flashdata("error","Favor de ingresar credenciales");
        redirect('admin/Login');
    }
    $data['registros'] = $this->Reporte_model->getRegistros();
    $this->load->view('admin/ver_reporte',$data);
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

  public function Exportar(){
    if(isset($_POST['fechaInicial']) && isset($_POST['fechaFinal'])){
      //voletea fecha para mysql
      $fechaInicial = date('Y-m-d',strtotime($_POST['fechaInicial']));
      $fechaFinal = date('Y-m-d',strtotime($_POST['fechaFinal']));

      $_SESSION['fi'] = $fechaInicial;
      $_SESSION['ff'] = $fechaFinal;

      $res = $this->Calificacion_model->exportar($fechaInicial,$fechaFinal);
      if($res){
        $this->session->set_flashdata("success","<strong>¡Archivo exportado!</strong>");
        redirect('admin/index');
      }
      else{
        $this->session->set_flashdata("error","Algo salió mal, archivo no exportado");
        redirect('admin/index');
      }
    }
    else{
      //No hay else siempre llega $_POST
    }
  }

  public function ExportarReporte(){
    if(isset($_POST['er'])){
      $res = $this->Reporte_model->exportar();
      if($res){
        $this->session->set_flashdata("success","<strong>¡Archivo exportado!</strong>");
        redirect('admin/index');
      }
      else{
        $this->session->set_flashdata("error","Algo salió mal, archivo no exportado");
        redirect('admin/index');
      }
    }
  }
}
