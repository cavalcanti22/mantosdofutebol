<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public $id;
	public $nome;
	public $email;
	public $senha;

	public function __construct(){
		parent::__construct();
	}

	public function listarUsuarios(){
		$this->db->order_by('nome','ASC');
		return $this->db->get('usuarios')->result();
	}

	public function insertUsuario($path,$post){ 
		$data = array( 
			'nome' 		=> $post['nome'], 
			'email' 	=> $post['email'], 
			'senha' 	=> md5($post['senha']), 
			'imagem'	=>'assets/images/'.$path 
		); 

		return $this->db->insert('usuarios', $data); 
	}

		public function insertUsuarioSemImagem($post){ 
		$data = array( 
			'nome' 		=> $post['nome'], 
			'email' 	=> $post['email'], 
			'senha' 	=> md5($post['senha']),
		); 

		return $this->db->insert('usuarios', $data); 
	}

	public function excluir($id,$caminho){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('usuarios');
	}

	public function excluirImagem($id,$caminho){
		
		$data = array('imagem' => '');
		$this->db->where('md5(id)',$id); 
		unlink($caminho);
		return $this->db->update('usuarios', $data);

	}


	public function getUsuario($id){
		$this->db->from('usuarios');
		$this->db->where('md5(id)',$id);
		return $this->db->get()->unbuffered_row();
	}


	public function updateUsuario($id,$p,$path){

		$data['nome']  				= $p['nome'];
		$data['email']  			= $p['email'];
		$data['senha']  			= md5($p['senha']);
		$data['imagem']  			= 'assets/images/'.$path; 

		$this->db->set($data);
		return $this->db->update('usuarios', $data, array('md5(id)' => $id));


	}

		public function updateUsuarioSemImagem($id,$p){

		$data['nome']  				= $p['nome'];
		$data['email']  			= $p['email'];
		$data['senha']  			= md5($p['senha']);
		
		return $this->db->update('usuarios', $data, array('md5(id)' => $id));
	}

	
}
