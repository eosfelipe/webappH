<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

  public function insertarUsuario () {
        //insert data
        $data = array(
            //assign data into array elements
            'usuario' => $this->input->post('usuario'),
            'nombre' => $this->input->post('nombre'),
            'email' =>$this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );
        //insert data to the database
        $this->db->insert('usuarios',$data);
    }

  public function checkLogin() {
    //enter username and password
      $usuario = $this->input->post('usuario',TRUE);
      $password = md5($this->input->post('password',TRUE));

      //fetch data from database
      $this->load->database();
      $this->db->where('usuario',$usuario);
      $this->db->where('password',$password);
      $res = $this->db->get('usuarios');

      //check if there's a user with the above inputs
      if ($res->num_rows() == 1) {

          //retrieve the details of the user
          return $res->result();

      } else {

          return false;

      }

    }
}
