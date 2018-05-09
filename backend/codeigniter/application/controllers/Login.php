<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function loginUsuario() {

        $this->form_validation->set_message('required', 'El campo {field} es necesario {param}.');

        $this->form_validation->set_rules('usuario','Usuario','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('login/login_view');

        } else {

            $this->load->model('Usuarios_model');
            $reslt = $this->Usuarios_model->checkLogin();

            if ($reslt != false) {

                //set session
                $usuario = $_POST['usuario'];
                $password = md5($_POST['password']);

                //fetch from databse
                $this->db->select('*');
                $this->db->from('usuarios');
                $this->db->where(array('usuario' => $usuario , 'password' => $password));
                $query = $this->db->get();

                $usuario = $query->row();

                //if use exists
                if ($usuario->usuario) {

                    //login message
                    $this->session->set_flashdata("success","You are logged in");

                    //set session variables
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['username'] = $usuario->usuario;

                    //redirect
                    redirect('admin/index','refresh');

                }


            } else {

                //wrong credentials
                $this->session->set_flashdata('error','Usuario o Password inválido');
                redirect('home/Login');

            }
        }

    }
    //logging out of a user
    public function logoutUser() {
		unset($_SESSION);
    session_destroy();
		redirect('home/Login');
	}
}
