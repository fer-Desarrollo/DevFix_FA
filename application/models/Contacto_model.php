<?php
class Contacto_model extends CI_Model {

    public function getContactos() {
        return $this->db
            ->order_by('fecha_envio', 'DESC')
            ->get('contactos')
            ->result();
    }
}
