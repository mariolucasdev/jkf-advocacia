<?php

class Leads_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function buscar($where = [])
  {
      $this->db->where($where);

      $query = $this->db->get('leads');
      return $query->result();
  }
    
}