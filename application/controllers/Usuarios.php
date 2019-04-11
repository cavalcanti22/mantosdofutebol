<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('Usuarios_model','modelusuarios');
    if (!$this->session->userdata('userlogado')) {
      redirect(base_url('login'));
    }
  }

  public function index(){
    $this->load->helper('funcoes');
    $data['titulo']   = 'PAINEL DE CONTROLE | USUÁRIOS';
    $data['view'] 	  = 'usuarios/index';
    $data['js']       = 'js/index';
    $data['usuarios'] = $this->modelusuarios->listarusuarios();

    $this->load->view('layouts/admin',$data);
  }


  public function add(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nome', 'Nome do usuário', 'required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[usuarios.email]');
    $this->form_validation->set_rules('senha', 'Senha', 'required|min_length[3]');
    $this->form_validation->set_rules('csenha', 'Confirmar Senha', 'required|matches[senha]');
    if ($this->form_validation->run() === FALSE){
     $this->load->helper('funcoes');
     $data['titulo']  = 'PAINEL DE CONTROLE | ADD USUÁRIO';
     $data['view']    = 'usuarios/add';
     $data['js']      = 'js/add';
     $this->load->view('layouts/admin',$data);

   }else{
        // Upload the files then pass data to your model
    $config['upload_path'] = 'assets/images/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('imagem')){
            // If the upload fails
      $this->modelusuarios->insertUsuarioSemImagem($this->input->post());
      $_SESSION['feedback'] = '<div class="alert alert-success">USUÁRIO CADASTRADO COM SUCESSO</div>';
      redirect(base_url('Usuarios'));
        // echo $this->upload->display_errors('<p>', '</p>');
    }else{
            // Pass the file name and post data to the insertImage model
      $this->modelusuarios->insertUsuario($this->upload->data('file_name'),$this->input->post());
      $_SESSION['feedback'] = '<div class="alert alert-success">USUÁRIO CADASTRADO COM SUCESSO</div>';
      redirect(base_url('Usuarios'));
    }
  }
}

public function edit($id){
  $this->load->helper('funcoes');
  $data['titulo']   = 'EDITAR | USUÁRIO';
  $data['view'] 	  = 'usuarios/edit';
  $data['js']       = 'js/edit';
  $data['usuario']  = $this->modelusuarios->getUsuario($id);
  $this->load->view('layouts/admin',$data);
}


public function saveUsuario($id){

  $this->load->library('form_validation');
  $this->form_validation->set_rules('nome', 'Nome do usuário', 'required|min_length[3]');
  $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

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
      $this->modelusuarios->updateUsuarioSemImagem($id,$this->input->post());
      $_SESSION['feedback'] = '<div class="alert alert-info">USUÁRIO EDITADO COM SUCESSO</div>';
      redirect(base_url('Usuarios'));

        // echo $this->upload->display_errors('<p>', '</p>');

    } else {

      $usuarios = $this->modelusuarios->getUsuario($id);
      $arquivoDoBanco = $usuarios->imagem;
      if ($arquivoDoBanco == '') {
        if (!$this->modelusuarios->updateUsuario($id,$this->input->post(),$this->upload->data('file_name'))) {

          die("ERRO AO ATUALIZAR!");
        } else{
          $_SESSION['feedback'] = '<div class="alert alert-info">USUÁRIO EDITADO COM SUCESSO</div>';

          redirect(base_url('Usuarios'));

        }
      } else {
       unlink($arquivoDoBanco);
       if (!$this->modelusuarios->updateUsuario($id,$this->input->post(),$this->upload->data('file_name'))) {

        die("ERRO AO ATUALIZAR!");
      } else{
        $_SESSION['feedback'] = '<div class="alert alert-info">USUÁRIO EDITADO COM SUCESSO</div>';

        redirect(base_url('Usuarios'));

      }
    }
  }
}
}

public function getOne($id){
  $this->load->helper('funcoes');
  $data['titulo']       = 'VISUALIZAR | USUÁRIO';
  $data['view']         = 'usuarios/one';
  $data['js']           = 'js/add';
  $data['usuario']      = $this->modelusuarios->getUsuario($id);
  $this->load->view('layouts/admin',$data);
}

public function remove($id){

  $usuario = $this->modelusuarios->getUsuario($id);
  $caminho =  $usuario->imagem;


  if ($caminho == '') {
    if ($this->modelusuarios->excluir($id,$caminho)) {
     $_SESSION['feedback'] = '<div class="alert alert-danger">USUÁRIO REMOVIDO COM SUCESSO</div>';
     redirect(base_url('usuarios'));
   }else{
     echo "Erro no sistema";
   }
 }

 if ($this->modelusuarios->excluir($id,$caminho)) {
  unlink($caminho);

  $_SESSION['feedback'] = '<div class="alert alert-danger">USUÁRIO REMOVIDO COM SUCESSO</div>';
  redirect(base_url('usuarios'));
}else{
 echo "Erro no sistema";
}
}

// Remove apenas a imagem
public function removeImagem($id){

  $usuario = $this->modelusuarios->getUsuario($id);
  $caminho =  $usuario->imagem;
    // print_r($caminho);
    // die('teste');
  if ($this->modelusuarios->excluirImagem($id,$caminho)) {
   $_SESSION['feedback'] = '<div class="alert alert-danger">IMAGEM REMOVIDA COM SUCESSO</div>';
   redirect(base_url('usuarios'));
 }else{
   echo "Erro no sistema";
 }
}
}

