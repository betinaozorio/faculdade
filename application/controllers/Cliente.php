<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cliente extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('clienteModel');       
    }
    
    public function index() {
         $dados['titulo']="Lista de clientes";
        $dados['lista']=$this->clienteModel->buscarTodos();
        
        $this->load->view('template/header');
        $this->load->view('cliente/listaCliente',$dados);
        $this->load->view('template/footer');
    }
    
    public function excluir($id_cliente) {
        $r = $this->clienteModel->excluir($id_cliente);
        if($r) $this->index ();
        else echo "Erro ao tentar excluir o registro";
    }
    
    public function novo() {
        $dados['titulo'] = "Manutenção de Cliente";
        
        $dados['acao'] = base_url('index.php/cliente/cadastrar');
        
        $this->load->view('template/header');
        $this->load->view('cliente/formCliente', $dados);
        $this->load->view('template/footer');
    }
    
    public function cadastrar(){
        $this->load->library('form_validation');
        $cliente = $this->input->post();
        $this->clienteModel->gravar($cliente);
        $this->index();
        
    }
    
    public function buscar($id_cliente) {
        $dados['cliente'] = $this->clienteModel->buscar($id_cliente);
        
        $this->load->view('template/header');
        $this->load->view('cliente/formCliente',$dados);
        $this->load->view('template/footer');
    }
    

}