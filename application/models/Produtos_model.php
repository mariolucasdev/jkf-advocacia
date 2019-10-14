<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function buscar($where = [])
    {
        $this->db->select('products.*, products_categories.category_name');
        $this->db->from('products');
        $this->db->join('products_categories','products.id_category=products_categories.id_category', 'left');
        $this->db->where($where);

        $query = $this->db->get();
        return $query->result();
    }

    public function orcamento($data)
    {
        if($this->db->insert('orcamentos', $data)):
            $this->adicionar_leads($data);
            return true;
        endif;
        return false;
    }

    public function adicionar_leads($data)
    {
        $lead['nome']     = $data['nome'];
        $lead['telefone'] = $data['telefone'];
        $lead['email']    = $data['email'];

        $this->db->where('email', $e);
        $query = $this->db->get('leads');
        if($query->row() == 0):
            $this->db->insert('leads', $lead);
        endif;
    }

}