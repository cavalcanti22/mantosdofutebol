<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas_model extends CI_Model {

	public $id;
	public $nome;
	public $titulo;
	public $subtitulo;
	public $texto1;
	public $texto2;
	public $texto3;
	public $texto4;
	public $texto;
	public $imagem;
	public $email;
	public $telefone;
	public $endereco;
	public $cidade;
	public $facebook;
	public $instagram;	

	public function __construct(){
		parent::__construct();
	}

	public function listarPaginas(){
		return $this->db->get('paginas')->result();
	}

	public function getPagina($id){
		$this->db->from('paginas');
		$this->db->where('md5(id)',$id);
		return $this->db->get()->unbuffered_row();
	}

	public function updatePagina($id,$p,$path){

		$data['nome']  			= $p['nome'];
		$data['titulo']  		= $p['titulo'];
		$data['subtitulo']  	= $p['subtitulo'];
		$data['texto1']  		= $p['texto1'];
		$data['texto2']  		= $p['texto2'];
		$data['texto3']  		= $p['texto3'];
		$data['texto4']  		= $p['texto4'];
		$data['texto']  		= $p['texto'];
		$data['imagem']  		= 'assets/images/'.$path;
		$data['email']  		= $p['email'];
		$data['telefone']  		= $p['telefone'];
		$data['endereco']  		= $p['endereco'];
		$data['cidade']  		= $p['cidade'];
		$data['facebook']  		= $p['facebook'];
		$data['instagram']  	= $p['instagram'];

		return $this->db->update('paginas', $data, array('md5(id)' => $id));

	}

	public function updatePaginaSemImagem($id,$p){

		$data['nome']  			= $p['nome'];
		$data['titulo']  		= $p['titulo'];
		$data['subtitulo']  	= $p['subtitulo'];
		$data['texto1']  		= $p['texto1'];
		$data['texto2']  		= $p['texto2'];
		$data['texto3']  		= $p['texto3'];
		$data['texto4']  		= $p['texto4'];
		$data['texto']  		= $p['texto'];
		$data['email']  		= $p['email'];
		$data['telefone']  		= $p['telefone'];
		$data['endereco']  		= $p['endereco'];
		$data['cidade']  		= $p['cidade'];
		$data['facebook']  		= $p['facebook'];
		$data['instagram']  	= $p['instagram'];
		
		return $this->db->update('paginas', $data, array('md5(id)' => $id));
	}

	public function excluirImagem($id,$caminho){
		
		$data = array('imagem' => '');
		$this->db->where('md5(id)',$id); 
		
		unlink($caminho);
		return $this->db->update('paginas', $data);

	}

}
