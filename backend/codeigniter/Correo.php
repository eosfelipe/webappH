<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Correo extends CI_Controller {

  public function __construct(){
    parent::__construct();
    ini_set('max_execution_time', 300); //300 seconds = 5 minutes
    $config = Array('mailtype' => 'html');
    $this->load->library('session');
    $this->load->library('email',$config);
    $this->load->database();
    $this->load->model('Calificacion_model');
    $this->load->model('Reporte_model');
    $this->load->model('Logs_model');
    $this->load->helper('email');
  }

  public function validar($arreglo_correos){
    $arreglo_correos_limpio = array();
    foreach($arreglo_correos as $e){
      if(valid_email($e->email)){
        array_push($arreglo_correos_limpio,$e->email);
      }else{
        echo 'No es un correo valido.';
      }
    }
    return $arreglo_correos_limpio;
  }

  public function filtrar(){
    $orden_servicio=array();
    if(isset($_POST['enviar_correo'])){
      $data = $this->Reporte_model->getOrden();
      foreach($data as $e){
        if(!isset($e->orden_servicio)){
          $o = substr($e->ORDEN,4); //limpiar orden de servicio
          array_push($orden_servicio,$o);
        }
      }
    }
    return $orden_servicio;
  }

  public function enviar(){
    $orden = $this->filtrar();
    $count = count($orden);
    $i = 0;
    foreach($orden as $e){
      $datos_cliente = $this->Reporte_model->getCorreo($e);
      $datos['link'] = base64_encode(substr($datos_cliente[0]->orden,4));

      $mensaje = $this->load->view('correo/encuesta', $datos, TRUE);
      // echo $datos_cliente[0]->cliente;
      // echo $datos_cliente[0]->email.'<br>';
      $this->email->clear();
      $this->email->to($datos_cliente[0]->email);
      //$this->email->to('felipe@majortom.space');
      $this->email->from('no-reply@forksem.com','Hyundai Mérida');
      $this->email->subject('Por favor, Ayúdanos a mejorar nuestro servicio');
      $this->email->message($mensaje);
      if($this->email->send()){
        $i++;
        echo 'correo enviado<br>';
        while($i == $count){
          $this->session->set_flashdata("success","¡Encuestas enviadas!");
          $this->Logs_model->insertar_log(1);
          $this->email->clear();
          $this->email->to('escobedo.felipe@hotmail.com');
          $this->email->from('no-reply@forksem.com','Hyundai Mérida');
          $this->email->subject('AppHyundai envió encuestas');
          $this->email->message('Se enviaron '.$i.' encuestas.');
          if($this->email->send()){
            redirect('admin/verReporte');
          }//fin if
        }
      }
    }
  }
}
