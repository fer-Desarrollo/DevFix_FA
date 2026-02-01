<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Contacto_model');
    }

    public function enviar() {

        $mensaje = 
            "Empresa: " . $this->input->post('company') . "\n" .
            "Servicio: " . $this->input->post('service') . "\n\n" .
            $this->input->post('message');

        $data = [
            'nombre'   => $this->input->post('name', TRUE),
            'correo'   => $this->input->post('email', TRUE),
            'telefono' => $this->input->post('phone', TRUE),
            'mensaje'  => $mensaje,
            'estado'   => 'nuevo'
        ];

        $this->Contacto_model->insertar($data);

        echo 'ok';
    }
}
