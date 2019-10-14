<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

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

    public function buscar($id = false)
    {
        if($id):
            $this->db->where('id', $id);
            $query = $this->db->get('clientes');
            return $query->row();
        else:
            $query = $this->db->get('clientes');
            return $query->result();
        endif;
    }

    public function adicionar($data)
    {
        if($this->db->insert('clientes', $data)):
            return true;
        endif;
        return false;
    }
}