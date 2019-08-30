<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('produtos_model');
        $this->data['categories'] = $this->categorias_model->buscar();
        $this->template = new Template('templates', 'produtos/');
    }
    
	public function index()
	{
        $this->home();
    }

    public function home()
    {
        $this->data['title'] = 'Produtos';
        if($this->input->get('category')):
            $this->data['products'] =
            $this->produtos_model->buscar(['products.id_category'=>$this->input->get('category')]);
        else:
            $this->data['products'] =
            $this->produtos_model->buscar();
        endif;

        $this->template->load($this->data, ['banner','content']);
    }
    
    public function visualizar()
    {
        if($this->uri->segment(3)):
            $this->data['products'] =
            $this->produtos_model->buscar();
            
            $this->data['product'] = $this->produtos_model->buscar(['id_product'=>$this->uri->segment(3)])[0];
            $this->template->load($this->data, ['single-banner','single']);
        endif;
    }
    
}
