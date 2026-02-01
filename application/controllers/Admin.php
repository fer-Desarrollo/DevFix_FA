<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Contacto_model');
        $this->load->library('session');

        if (!$this->session->userdata('logueado')) {
            redirect(base_url());
        }
    }

    public function dashboard() {
        $data['contactos'] = $this->Contacto_model->getContactos();
        $this->load->view('admin/dashboard', $data);
    }
}
