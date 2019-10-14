<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('clientes_model');
        $this->data['clientes'] = $this->clientes_model->buscar();
        $this->data['categories'] = $this->categorias_model->buscar();
        $this->data['categorias'] = $this->blog_model->categorias();
        $this->template = new Template('templates', 'clientes/');
        $this->alert    = new Alert();
    }
    
	public function index()
	{
        $this->home();
    }

    public function home()
    {
        $this->template->load($this->data, ['banner', 'content']);
    }

    
    public function visualizar()
    {
    }
    
}
