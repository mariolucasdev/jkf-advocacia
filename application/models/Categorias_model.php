<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($where = [])
    {
        $this->db->where($where);

        $query = $this->db->get('products_categories');
        return $query->result();
    }

}