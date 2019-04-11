<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public $email;
	public $senha;

	public function __construct(){
		parent::__construct();
	}

	public function login($email,$senha){

		$data['email'] = $email;
		$data['senha'] = $senha;

		$this->db->from('usuarios');
		$this->db->where('email',$email);
		$this->db->where('senha',md5($senha));
		return $this->db->get()->unbuffered_row();
	}
}
