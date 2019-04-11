<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cupons extends CI_Controller {

public function __construct(){
parent::__construct();

$this->load->model('Cupons_model','modelcupons');
	if (!$this->session->userdata('userlogado')) {
	redirect(base_url('login'));
	}
}


public function index(){
$this->load->helper('funcoes');
$data['titulo'] 		= 'PAINEL | LISTA DE CUPONS';
$data['view'] 			= 'cupons/index';
$data['js']        		= 'js/index';
// $data['totalcupons']    = $this->modelcupons->totalcupons();
$data['cupons'] 		= $this->modelcupons->getAllCupons();
$this->load->view('layouts/admin',$data);
}

public function add(){
$this->load->library('form_validation');
$this->form_validation->set_rules('title', 'Título do Cupom', 'required|min_length[3]');

if ($this->form_validation->run() == FALSE){
$data['titulo']    		= 'PAINEL DE CONTROLE | ADD CUPOM';
$data['view']      		= 'cupons/add';
$data['js']        		= 'js/add';
// $data['totalcupons'] 	= $this->modelcupons->totalcupons();
$data['cupons'] 		= $this->modelcupons->getAllCupons();

$this->load->view('layouts/admin',$data);

}else{

$title   		= $this->input->post('title');
$value   		= $this->input->post('value');
$code   		= $this->input->post('code');
$button   		= $this->input->post('button');
$link   		= $this->input->post('link');
$text1  		= $this->input->post('text1');
$text2  		= $this->input->post('text2');
$text3  		= $this->input->post('text3');
$text4  		= $this->input->post('text4');

		if ($this->modelcupons->insertCupom($title,$value,$code,$button,$link,$text1,$text2,$text3,$text4)) {
		$_SESSION['feedback'] = '<div class="alert alert-success">CUPOM CADASTRADO COM SUCESSO</div>';

		redirect(base_url('Cupons'));
		}
	}
}


public function saveCupom($id){

	$this->load->library('form_validation');
	$this->form_validation->set_rules('title', 'Título da tarefa', 'required|min_length[3]');

	if (!$this->form_validation->run()) {
	$this->edit($id);
	}

	else {

	$title   		= $this->input->post('title');
	$value   		= $this->input->post('value');
	$code   		= $this->input->post('code');
	$button   		= $this->input->post('button');
	$link   		= $this->input->post('link');
	$text1  		= $this->input->post('text1');
	$text2  		= $this->input->post('text2');
	$text3  		= $this->input->post('text3');
	$text4  		= $this->input->post('text4');


		if ($this->modelcupons->updateCupom($title,$value,$code,$button,$link,$text1,$text2,$text3,$text4,$id)) {


		$_SESSION['feedback'] = '<div class="alert alert-info">CUPOM EDITADO COM SUCESSO</div>';

		redirect(base_url('Cupons'));
		}else{
		echo "Erro no sistema";
		}
	}
}


public function edit($id){
$data['titulo'] 		= 'PAINEL | EDITAR CUPOM';
$data['view'] 			= 'cupons/edit';
$data['js']        		= 'js/edit';
$data['cupom'] 		= $this->modelcupons->getCupom($id);
$this->load->view('layouts/admin',$data);
}

public function getOne($id){

$data['titulo'] 		= 'PAINEL | EDITAR CUPOM';
$data['titulo']   		= 'VISUALIZAR | CUPOM';
$data['view']     		= 'cupons/one';
$data['js']       	  	= 'js/add';
$data['cupom']  		= $this->modelcupons->getCupom($id);

$this->load->view('layouts/admin',$data);
}

public function remove($id){

		if ($this->modelcupons->excluir($id)) {
		$_SESSION['feedback'] = '<div class="alert alert-danger">CUPOM REMOVIDO COM SUCESSO</div>';
		redirect(base_url('Cupons'));
		}else{
		echo "Erro no sistema";
		}
	}
}