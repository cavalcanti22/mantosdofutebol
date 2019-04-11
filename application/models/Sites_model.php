<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites_model extends CI_Model {

	public $email;

	public function __construct(){
		parent::__construct();
	}



	public function insertNotification($email){ 
		$data = array( 
			'email' 	=> $_POST['email']
		); 

		return $this->db->insert('emails', $data); 
	}
}
