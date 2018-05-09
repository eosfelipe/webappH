<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // $this->load->library('javascript');
    $this->load->library('form_validation');
    // $this->load->library('email');
    $this->load->library('session');
  }

    public function index() {
        if ($_SESSION['user_logged'] == FALSE) {
            $this->session->set_flashdata("error","Please login first to view");
            redirect('Home/Login');
        }

        $this->load->view('admin/administracion');
    }

    public function Login() {
        $this->load->view('login/login_view');
    }

    public function Register() {
        $this->load->view('login/register_view');
    }

}
