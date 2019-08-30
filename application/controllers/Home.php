<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->data['categories'] = $this->categorias_model->buscar();
    }
    
	public function index()
	{  
        $this->template = new Template('templates', 'home/');
        
        $this->data['sobre'] = $this->home_model->buscar('about');
        $this->data['diferenciais'] = $this->home_model->buscar('featured');
        $this->template->load($this->data, ['banner','content']);
    }
    
    public function sistema()
    {
        $this->template = new Template('templates', 'sistema/');
        $this->template->load($this->data, ['banner', 'content']);
    }

    public function certificado()
    {
        $this->template = new Template('templates', 'certificado/');
        $this->template->load($this->data, ['banner', 'content']);
    }

    public function tef()
    {
        $this->template = new Template('templates', 'tef/');
        $this->template->load($this->data, ['banner', 'content']);
    }
}
