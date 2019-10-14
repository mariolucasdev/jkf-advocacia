<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->template = new Template('templates', 'contato/');
        $this->alert    = new Alert();
    }
    
	public function index()
	{
        $this->template->load('banner', 'content');
    }

    public function enviar_email()
    {
        $nome  = $this->input->post('nome');
        $email = $this->input->post('email');
        $assunto  = $this->input->post('assunto');
        $mensagem = $this->input->post('mensagem');
        
        if($this->input->post('telefone')):
            $telefone = $this->input->post('telefone');
        else:
            $telefone = '';
        endif;
        
        $this->load->model('contato_model');
        
        $this->contato_model->adicionar_lead(array(
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone
        ));

        $this->email->from($email, $nome);
        $this->email->subject($assunto);
        $this->email->reply_to($email, $nome);
        $this->email->to('contato@sixtec.com.br');
        $this->email->message($mensagem);
        
        if($this->email->send()):
            $this->session->set_flashdata('sucesso', 'Valeu '. $nome . '! Sua mensagem foi enviada com sucesso, retornaremos em breve.');
            redirect($this->input->post('local'));
        else:
            $this->session->set_flashdata('erro', 'Ops '. $nome . '! houve um problema no envio da mensagem, tente novamente por favor.');
            redirect($this->input->post('local'));
        endif;
    }

    
}
