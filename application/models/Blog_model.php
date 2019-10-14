<?php

class Blog_model extends CI_Model {

  public $id;
  public $titulo;
  public $conteudo;
  public $imagem;
  public $data;
  public $autor;
  public $categoria;

  public function __construct()
  {
    parent::__construct();
  }

  public function buscar($where = [])
  {
      $this->db->where($where);
      $this->db->order_by('id', 'desc');

      $query = $this->db->get('posts');
      return $query->result();
  }
    
  public function categorias()
  {
    $query = $this->db->get('posts_categories');
    return $query->result();
  }

  public function excluir($id = false)
  {
    if($id):
      $this->db->where('id', $id);
      if($this->db->delete('posts')):
        return true;
      endif;
    endif;

    return false;
  }
  
  public function getPosts($id = false)
  {
    
    if($id == false):
      $this->db->limit(16);
      $query = $this->db->get('posts');
      return $query->result();
    else:
      $this->db->where('id', $id);
      $query = $this->db->get('posts');
      return $query->row();
    endif;
  }

  public function addPost($data = array())
  {
    if(!empty($data)):
      if($this->db->insert('posts', $data)):
        return true;
      else:
        return false;
      endif;
    else:
      return false;
    endif;
  }
  
  public function searchPosts($term)
  {
    $this->db->like('titulo', $term);
    $query = $this->db->get('posts');
    return $query->result();
  }
  
  public function addCategories($data)
  {
    if(!empty($data)):
      if($this->db->insert('posts_categories', $data)):
        return true;
      else:
        return false;
      endif;
    else:
      return false;
    endif;
  }

  public function getCategories($id = false)
  {
    if($id == false):
      $query = $this->db->get('posts_categories');
      return $query->result();
    else:
      $query = $this->db->get('posts_categories');
      return $query->row();
    endif;
  }
  
  public function getLastPosts()
  {
    $this->db->limit(2);
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get('posts');
    return $query->result();
  }

}