<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function do_upload(){
    $config['upload_path'] = './upload/';
    $this->load->library('upload',$config);

    if(empty($_FILES['file'])){
      echo json_encode(['error'=>'No hay ficheros para cargar.']);
      return;
    }

    $dir = './upload/';

    $archivo = $_FILES['file'];
    $estado_proceso = NULL;
    $paths = array();
    $nombre_archivo = $archivo['name'];


    // if(!file_exists($dir)) echo json_encode($dir);
    if(file_exists($dir)){
      for($i=0; $i<count($nombre_archivo);$i++){
        $nombre_extension = explode('.',basename($nombre_archivo[$i]));
        // $extension = array_pop($nombre_extension);
        $extension = 'csv';
        // $nombre = array_pop($nombre_extension);
        $nombre = 'db_hyundai_'.date('d-m-Y');

        $archivo_destino = $dir.DIRECTORY_SEPARATOR.utf8_decode($nombre).'.'.$extension;
        // echo json_encode($archivo_destino);

        if(move_uploaded_file($archivo['tmp_name'][$i],$archivo_destino)){
          $estado_proceso = true;
          $paths[] = $archivo_destino;
        }
        else{
          $estado_proceso = false;
          break;
        }
      }//for
    }//if

    $respuestas = array();
    if($estado_proceso === true){
      $this->db->truncate('reporte');
      //procesar archivo en la bd
      // print_r($this->csv_to_array($archivo_destino));
      $data = $this->csv_to_array($archivo_destino);
      $count = count($data);
      $this->db->insert_batch('reporte', $data);
      $first_id = $this->db->insert_id();
      $last_id = $first_id + ($count-1);

      if(isset($last_id)){
        $respuestas = array();
        $respuestas = ['count' => $count, 'last_id' => $last_id, 'exito'=>true];
        $this->session->set_flashdata("success","Archivo cargado correctamente.");
      }
    }
    elseif($estado_proceso === false){
      $respuestas = ['error'=>'Error al subir los archivos. Póngase en contacto con el administrador del sistema.'];
      // Eliminamos todos los archivos subidos
      foreach ($paths as $fichero) {
        unlink($fichero);
      }
    }
    else{
      $respuestas = ['error'=>'No se ha procesado el archivo.'];
    }
    echo json_encode($respuestas);
  }//do_upload

  public function csv_to_array($filename='', $delimiter=','){
    if(!file_exists($filename) || !is_readable($filename))
    return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE){
      while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE){
        if(!$header)
        $header = $row;
        else
        $data[] = array_combine($header, $row);
      }
      fclose($handle);
    }
    return $data;
  }

}//class
