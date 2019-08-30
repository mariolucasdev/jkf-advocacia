<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($table)
    {
        $query = $this->db->get($table);
        return $query->result();
    }
}