<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->library('session');
    }

    public function login() {

        $correo   = $this->input->post('correo', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->Usuario_model->login($correo, $password);

        if ($user) {
            $this->session->set_userdata([
                'id'        => $user->id,
                'nombre'    => $user->nombre,
                'rol'       => $user->rol,
                'logueado'  => TRUE
            ]);

            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Credenciales incorrectas');
            redirect(base_url());
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
