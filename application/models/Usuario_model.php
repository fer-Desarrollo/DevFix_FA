<?php
class Usuario_model extends CI_Model {

    public function login($correo, $password) {

        return $this->db
            ->where('correo', $correo)
            ->where('password', $password)
            ->where('activo', 1)
            ->get('usuarios')
            ->row();
    }
}
