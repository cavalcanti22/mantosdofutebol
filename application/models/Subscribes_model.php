<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribes_model extends CI_Model {

	public $id;
	public $email;
	public $tempo;

	public function __construct(){
		parent::__construct();
	}

	public function getAllSubscribes(){
		$this->db->order_by('tempo','ASC');
		return $this->db->get('emails')->result();
	}

		public function excluir($id){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('emails');
	}

	
}
