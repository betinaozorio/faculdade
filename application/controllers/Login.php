<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller{
    //put your code here
    
    function __construct() {
    parent::__construct();
    }
    
    public function index() {
        $this->load->view('login/formlogin');
    }
    
    public function validarUsuario() {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('senha', 'senha', 'trim|required');
        
        if($this->form_validation->run()===false){
            $this->load->view('login/formlogin');
        }else{
            $dados = $this->input->post();
            if($dados['email']=='teste@teste.com.br'
                    && $dados['senha']=='12345'){
                $this->session->set_userdata('logado', array('email'=>$dados['email']));
                redirect('Cliente');  
            }else{
                $dados['mensagem'] = "Usuário ou senha incorretos";
                $this->load->view('login/formlogin', $dados);
                
                
            }
        }
    }
    
    public function sair() {
        $this->session->unset_userdata('logado', array('email'=>''));
        $this->index();
    }
    

}
