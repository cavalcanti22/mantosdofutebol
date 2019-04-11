<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribes extends CI_Controller {

	public function __construct(){
		parent::__construct();
    	$this->load->model('Subscribes_model','modelsubscribes');

	}


	public function index(){

		$data['titulo'] 	= 'PAINEL | LISTA DE EMAILS';
		$data['view'] 		= 'subscribes/index';
		$data['js']        = 'js/index';
		$data['emails'] 	= $this->modelsubscribes->getAllSubscribes();
		$this->load->view('layouts/admin',$data);

	}

		public function remove($id){

		if ($this->modelsubscribes->excluir($id)) {
			$_SESSION['feedback'] = '<div class="alert alert-danger">EMAIL REMOVIDO COM SUCESSO</div>';
			redirect(base_url('Subscribes'));
		}else{
			echo "Erro no sistema";
		}
	}
}