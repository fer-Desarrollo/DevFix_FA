<?php
class Contacto_model extends CI_Model {

    public function insertar($data) {
        return $this->db->insert('contactos', $data);
    }

    public function getContactos() {
        return $this->db
            ->order_by('fecha_envio', 'DESC')
            ->get('contactos')
            ->result();
    }
}
