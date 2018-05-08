<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function profile() {

        if ($_SESSION['user_logged'] == FALSE) {
            $this->session->set_flashdata("error","Please login first to view");
            redirect('Home/Login');
        }

        $this->load->view('login/user_view');

    }
}
