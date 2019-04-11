<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Paginas_model','modelpaginas');
		if (!$this->session->userdata('userlogado')) {
			redirect(base_url('login'));
		}

	}


	public function index(){
		$this->load->helper('funcoes');
		$data['titulo']  = 'PAINEL DE CONTROLE | PÁGINAS';
		$data['view'] 	 = 'paginas/index';
		$data['js']      = 'js/index';
		$data['paginas'] = $this->modelpaginas->listarPaginas();

		$this->load->view('layouts/admin',$data);
	}

	public function edit($id){
		$this->load->helper('funcoes');
		$data['titulo']  = 'PAINEL DE CONTROLE | EDITAR PÁGINA';
		$data['view'] 	 = 'paginas/edit';
		$data['js']      = 'js/index';
		$data['pagina'] = $this->modelpaginas->getPagina($id);
		
		$this->load->view('layouts/admin',$data);
	}


	public function savePagina($id){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome','Nome da Página',
			'required|min_length[3]');

		if (!$this->form_validation->run()) {
			$this->edit($id);

		}
		else {

			$config['upload_path'] = 'assets/images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);


			if (!$this->upload->do_upload('imagem')){
					   // Se não for inserido imagem atualiza apenas o post,chamando um model especifico
				$this->modelpaginas->updatePaginasemImagem($id,$this->input->post());
				$_SESSION['feedback'] = '<div class="alert alert-info">PÁGINA EDITADA COM SUCESSO</div>';
				redirect(base_url('Paginas'));
					// echo $this->upload->display_errors('<p>', '</p>');

			} else {
				$paginas = $this->modelpaginas->getPagina($id);
				$arquivoDoBanco = $paginas->imagem;

				if ($arquivoDoBanco == '') {
					if (!$this->modelpaginas->updatePagina($id,$this->input->post(),$this->upload->data('file_name'))) {

						die("ERRO AO ATUALIZAR!");
					} else{

						redirect(base_url('Paginas'));
					}
				} else{
					unlink($arquivoDoBanco);
						// apaga o arquivo anterior
					if (!$this->modelpaginas->updatePagina($id,$this->input->post(),$this->upload->data('file_name'))) {

						die("ERRO AO ATUALIZAR!");
					} else{

						redirect(base_url('Paginas'));
					}
				}
			}
		}
	}

	public function removeImagem($id){

		$pagina = $this->modelpaginas->getPagina($id);
		$caminho =  $pagina->imagem;
    // print_r($caminho);
    // die('teste');
		if ($this->modelpaginas->excluirImagem($id,$caminho)) {
			$_SESSION['feedback'] = '<div class="alert alert-danger">IMAGEM REMOVIDA COM SUCESSO</div>';
			redirect(base_url('paginas'));
		}else{
			echo "Erro no sistema";
		}
	}


}

