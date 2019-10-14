<?php 

class Contato_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function adicionar_lead($data)
    {
        if($this->db->insert('leads', $data)):
            return true;
        endif;
        return false;
    }
}