<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Login_model','modellogin');
  }


  public function index(){

    $this->load->library('form_validation');
    $this->form_validation->set_rules('email','Email',
      'required|min_length[3]|is_unique[usuarios.nome]');
    $this->form_validation->set_rules('senha','Senha',
      'required|min_length[3]');


    if (!$this->form_validation->run()) {
      echo $this->form_validation->run();

    }else{
      $email   = $this->input->post('email'); 
      $senha   = $this->input->post('senha');

      $userlogado = $this->modellogin->login($email,$senha);

      if ($userlogado) {
        $sessao['userlogado']   = $userlogado;
        $sessao['userlogadoId'] = $userlogado->id;
        $sessao['logado']       = TRUE;
        $this->session->set_userdata($sessao);
        
             redirect(base_url('emails'));


      }else{
        $sessao['userlogado'] = NULL;
        $sessao['logado']     = FALSE;
        $this->session->set_userdata($sessao);
        redirect(base_url('Login'));

      }

    }

    $data['titulo']   = 'LOGIN | USUÁRIOS';
    $data['view'] 	   = 'login/index';
    $data['js']       = 'js/login';
    $this->load->view('layouts/login',$data);
  }

  public function logout(){
    $sessao['userlogado'] = NULL;
    $sessao['logado']     = FALSE;
    $this->session->set_userdata($sessao);

    redirect(base_url('Login'));
  }

}



