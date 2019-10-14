<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function __construct()
  {
      parent::__construct();

      $this->load->model('produtos_model');
      $this->data['categories'] = $this->categorias_model->buscar();
      $this->data['categorias'] = $this->blog_model->categorias();
      
      $this->template = new Template('templates', 'blog/');
      $this->alert    = new Alert();
  }

  public function index()
	{
    if($this->input->get('search')):
      $this->data['posts'] = $this->blog_model->buscar(['titulo' => $this->input->get('search')]);
    else:
      $this->data['posts'] = $this->blog_model->buscar();
    endif;

    $this->template->load($this->data, ['banner', 'content']);
  }
  
  public function post()
  {
    if($this->uri->segment(3)):
      $id = $this->uri->segment(3);
      $this->data['post'] = $this->blog_model->getPosts($id);
    endif;

    $this->template->load($this->data, ['banner-single', 'content-single']);

  }
  
  public function categoria()
  {
    if($this->uri->segment(3)):
      $this->data['posts'] = $this->blog_model->buscar(['categoria' => $this->uri->segment(3)]);
      $this->template->load($this->data, ['banner', 'content']);
    endif;
  }

}

