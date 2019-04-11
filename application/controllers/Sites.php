<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Paginas_model','modelpaginas');
		$this->load->model('Cupons_model','modelcupons');
		$this->load->model('Sites_model','modelsites');
	}


	public function index(){

		$data['titulo'] 		= 'Cupom Mantos do Futebol';
		$data['view'] 			= 'sites/index';
		$data['header'] 		= $this->modelpaginas->getPagina(md5(1));
		$data['footer'] 		= $this->modelpaginas->getPagina(md5(2));
		$data['superbanner'] 	= $this->modelpaginas->getPagina(md5(3));
		$data['bannertopo'] 	= $this->modelpaginas->getPagina(md5(4));
		$data['cupons'] 		= $this->modelcupons->getAllCupons();

		$this->load->view('layouts/site',$data);
	}

	public function subscribe(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if (!$this->form_validation->run()){
			$this->index();

		} else {

			$email = $this->input->post('email');

			if ($this->modelsites->insertNotification($email)) {
				$_SESSION['subscribe'] = '<div class="alert alert-success">INSCRITO COM SUCESSO!</div>';

				redirect(base_url());
			} else{
				$_SESSION['subscribe'] = '<div class="alert alert-danger">ERRO!TENTE NOVAMENTE</div>';
				redirect(base_url());
			}
		}
	}
}