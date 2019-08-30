<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($where = [])
    {
        $this->db->select('products.*, category.category_name');
        $this->db->from('products');
        $this->db->join('category','products.id_category=category.id_category', 'left');
        $this->db->where($where);

        $query = $this->db->get();
        return $query->result();
    }

}