<?php

class Login_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function login($usuario, $senha)
  {
      $this->db->where(['email' => $usuario, 'senha' => $senha]);
      $query = $this->db->get('usuario');
      return $query->row();
  }
}