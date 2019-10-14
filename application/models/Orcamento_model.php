<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orcamento_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    // public function buscar($where = [])
    // {
    //     $this->db->where($where);

    //     $query = $this->db->get('clientes');
    //     return $query->result();
    // }

    public function buscar($where = array())
    {
        $this->db->where($where);
        $query = $this->db->get('orcamentos');
        return $query->result();
    }

    public function adicionar($data)
    {
        if($this->db->insert('clientes', $data)):
            return true;
        endif;
        return false;
    }
}