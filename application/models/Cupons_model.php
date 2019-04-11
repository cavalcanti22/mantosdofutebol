<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cupons_model extends CI_Model {


	public $title;
	public $value;
	public $code;
	public $button;
	public $link;
	public $text1;
	public $text2;
	public $text3;
	public $text4;

	public function __construct(){
		parent::__construct();
	}


	public function getAllCupons(){

		$this->db->order_by('tempo','DESC');
		return $this->db->get('cupons')->result();

	}

	public function insertCupom($title,$value,$code,$button,$link,$text1,$text2,$text3,$text4){

		$data['title'] 		= $title;
		$data['value'] 		= $value;
		$data['code'] 		= $code;
		$data['button'] 	= $button;
		$data['link'] 		= $link;
		$data['text1'] 		= $text1;
		$data['text2'] 		= $text2;
		$data['text3'] 		= $text3;
		$data['text4'] 		= $text4;

		return $this->db->insert('cupons',$data);
	}

	public function getCupom($id){

		$this->db->from('cupons');
		$this->db->where('md5(id)',$id);

		return $this->db->get()->unbuffered_row();
	}
	public function updateCupom($title,$value,$code,$button,$link,$text1,$text2,$text3,$text4,$id){


		$data['title'] 		= $title;
		$data['value'] 		= $value;
		$data['code'] 		= $code;
		$data['button'] 	= $button;
		$data['link'] 		= $link;
		$data['text1'] 		= $text1;
		$data['text2'] 		= $text2;
		$data['text3'] 		= $text3;
		$data['text4'] 		= $text4;
	
		return $this->db->update('cupons', $data, array('md5(id)' => $id));
	}

	public function excluir($id){


		$this->db->where('md5(id)',$id);
		return $this->db->delete('cupons');
	}

	public function totalCupons(){

		$query = $this->db->query('SELECT * FROM cupons');
		return $query->num_rows();
	}
}

