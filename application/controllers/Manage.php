<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("blog_model");
    $this->load->model("orcamento_model");
    $this->load->model("clientes_model");
    $this->load->model("leads_model");
  }

  public function index()
  {
    $this->painel();
  }
  
  public function painel()
  {
    if($this->session->logado):
      $this->load->view('backend/templates/header');
      $this->load->view('backend/templates/aside');
      $this->load->view('backend/painel');
      $this->load->view('backend/templates/footer');
    else:
      redirect(base_url('login'));
    endif;
  }

  public function leads()
  {
    $this->data['leads'] = $this->posts = $this->leads_model->buscar();

    $this->load->view('backend/templates/header', $this->data);
    $this->load->view('backend/templates/aside');
    $this->load->view('backend/leads/container');
    $this->load->view('backend/templates/footer');
    
    if($this->input->post()):
      $msg = $this->input->post('mensagem');
      $assunto = $this->input->post('assunto');
      $call = $this->input->post('call');
      $btn = $this->input->post('btn');

      $this->enviarMensagem($assunto, $msg, $call, $btn);
    endif;
  }

  public function enviarMensagem($assunto, $msg, $call, $btn) {
      
    $c = 0;
    $e = 0;

    foreach ($this->data['leads'] as $l) {
      
      $this->email->from('contato@avantitecnologia.net', 'Avanti Tecnologia');
      $this->email->subject($assunto);
      $this->email->reply_to('contato@avantitecnologia.net', 'Avanti Tecnologia');
      $this->email->to($l->email, $l->nome);

      $data_email = [
        'nome' => $l->nome,
        'msg' => $msg,
        'assunto' => $assunto,
        'link'   => $call,
        'btn'   => $btn
      ];

      $template = $this->load->view('backend/emails/default', $data_email, true);
      $this->email->message($template);

      if($this->email->send()):
        $c++;
      else:
        $e++;
      endif;

    }
    $this->session->set_flashdata('sucesso', 'Mensagem enviada com sucesso para <b>'. $c . "</b> leads e com falha para <b>". $e . '</b> leads');
    redirect(current_url());
  }

  public function blog()
  {
    $this->data['posts'] = $this->posts = $this->blog_model->getPosts();
    
    $this->load->view('backend/templates/header', $this->data);
    $this->load->view('backend/templates/aside');
    $this->load->view('backend/blog/main');
    $this->load->view('backend/templates/footer');

    if($this->input->post('titulo')):
      $imagem          = md5($this->input->post('titulo'));
      $curriculo    = $_FILES['imagem'];
      $configuracao = array(
          'upload_path'   => './assets/frontend/img/blog/',
          'allowed_types' => 'png',
          'file_name'     => $imagem.'.png',
          'max_size'      => '3000'
      );

      $data['titulo']    = $this->input->post('titulo');
      $data['conteudo']  = $this->input->post('conteudo');
      $data['imagem']    = $imagem.'.png';
      $data['autor']     = $this->input->post('autor'); 
      $data['categoria'] = $this->input->post('categoria'); 

      if($this->blog_model->addPost($data)):
        $this->load->library('upload');
        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('imagem')):
          $this->session->set_flashdata('sucesso', 'Post adicionado com sucesso!');
          redirect(base_url('manage/blog'));
        else:
          $this->session->set_flashdata('erro', 'Erro ao fazer upload da imagem: '.$this->upload->display_errors());
          redirect(base_url('manage/blog'));
        endif;
      else:
        $this->session->set_flashdata('erro', 'Erro ao inserir no banco de dados.');
        redirect(base_url('manage/blog'));
      endif;

    endif;
  }

  public function excluirPost()
  {
    if($this->uri->segment(3)):
      if($this->blog_model->excluir($this->uri->segment(3))):
        $this->session->set_flashdata('sucesso', 'Post excluído com sucesso.');
        redirect(base_url('manage/blog/'));
      endif;
    endif;
  }

  public function categorias()
  {

    $this->data['categorias'] = $this->blog_model->categorias();

    $this->load->view('backend/templates/header', $this->data);
    $this->load->view('backend/templates/aside');
    $this->load->view('backend/posts-categorias/main');
    $this->load->view('backend/templates/footer');

    if($this->input->post()):
      $c = $this->input->post();
      if($this->blog_model->addCategories($c)):
        redirect(current_url());
      endif;
    endif;
  }

  public function clientes()
  {
    $data['clientes'] = $this->clientes_model->buscar();

    $this->load->view('backend/templates/header', $data);
    $this->load->view('backend/templates/aside');
    
    if($this->input->get('action')):
      if($this->input->get('action') == 'adicionar'):
        $this->load->view('backend/clientes/clientes-adicionar');
        
        if($this->input->post()):
          $data = $this->input->post();
          $img            = md5($this->input->post('nome'));
          $imagem         = $_FILES['imagem'];
          $configuracao = array(
            'upload_path'   => './assets/frontend/img/clients/',
            'allowed_types' => 'png|jpg|jpeg',
            'file_name'     => $img.'.png',
            'max_size'      => '3000'
          );

          $data['img'] = $img.'.png';
          unset($data['imagem']);
          if($this->clientes_model->adicionar($data)):

            $this->load->library('upload');
            $this->upload->initialize($configuracao);
            
            if($this->upload->do_upload('imagem')):
              $this->session->set_flashdata('sucesso', 'Dados incluídos com sucesso, mas houve problema na imagem!');
              redirect(base_url('manage/clientes'));
            else:
              $this->session->set_flashdata('sucesso', 'Erro no envio da imagem!');
              redirect(base_url('manage/clientes?action=adicionar'));
            endif;
          else:
            $this->session->set_flashdata('erro', 'Não foi possível incluir os dados e imagem não foi incluída!');
            redirect(base_url('manage/clientes?action=adicionar'));
          endif;
        endif;

      // EDITAR CLIENTE
      elseif($this->input->get('action') == 'editar'):
        
        $data['cliente'] = $this->clientes_model->buscar($this->input->get('id'));
        $this->load->view('backend/clientes/clientes-editar', $data);
        
        if($this->input->post()):
          $data = $this->input->post();
          $img            = md5($this->input->post('nome'));
          $imagem         = $_FILES['imagem'];
          $configuracao = array(
            'upload_path'   => './assets/frontend/img/clients/',
            'allowed_types' => 'png|jpg|jpeg',
            'file_name'     => $img.'.png',
            'max_size'      => '3000'
          );

          $data['img'] = $img.'.png';
          unset($data['imagem']);
          if($this->clientes_model->adicionar($data)):

            $this->load->library('upload');
            $this->upload->initialize($configuracao);
            
            if($this->upload->do_upload('imagem')):
              $this->session->set_flashdata('sucesso', 'Dados incluídos com sucesso, mas houve problema na imagem!');
              redirect(base_url('manage/clientes'));
            else:
              $this->session->set_flashdata('sucesso', 'Erro no envio da imagem!');
              redirect(base_url('manage/clientes?action=adicionar'));
            endif;
          else:
            $this->session->set_flashdata('erro', 'Não foi possível incluir os dados e imagem não foi incluída!');
            redirect(base_url('manage/clientes?action=adicionar'));
          endif;
        endif;

      endif;
    else:
      $this->load->view('backend/clientes/clientes');
    endif;
    $this->load->view('backend/templates/footer');
  }

  public function orcamento()
  {
    
    if($this->input->get('status')):
      if($this->input->get('status') == 'todos'):
        $data['orcamentos'] = $this->orcamento_model->buscar();
      endif;
      if($this->input->get('status') == 'aberto'):
        $data['orcamentos'] = $this->orcamento_model->buscar(['status' => 'aberto']);
      endif;
      if($this->input->get('status') == 'fechado'):
        $data['orcamentos'] = $this->orcamento_model->buscar(['status' => 'fechado']);
      endif;
    else:
      $data['orcamentos'] = $this->orcamento_model->buscar();
    endif;

      $this->load->view('backend/templates/header', $data);
      $this->load->view('backend/templates/aside');
      $this->load->view('backend/orcamento/container');
      $this->load->view('backend/templates/footer');
  }

  public function logout()
  {
    session_destroy();
    redirect(base_url('manage'));
  }
    
  public function salvarImagem($file, $path, $class)
  {
    doUpload($file, $path, $class);
  }
}
