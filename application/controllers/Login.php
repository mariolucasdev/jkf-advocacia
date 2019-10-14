<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
  
    public function index()
    {
        if($this->session->logado):
            redirect('manage/painel');
        else:
            $this->load->view('backend/login');
        endif;

        if($this->input->post('usuario')):
            $this->autenticar($this->input->post('usuario'), md5($this->input->post('senha')));
        endif;
    }

    public function autenticar($usuario, $senha){
        $usuario = $this->login_model->login($usuario, $senha);

        if(!empty($usuario)):
            $this->session->userdata('usuario', $usuario->nome);
            $this->session->userdata('email', $usuario->email);
            $this->session->logado = true;
            redirect(base_url('manage'));
        else:
            redirect(base_url('login?status=false'));
        endif;
    }
}

