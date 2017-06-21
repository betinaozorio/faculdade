<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author Administrador
 */
class Home extends CI_Controller{
    function __construct() {
        parent::__construct();
        
    }

    public function index() {
        $dados['titulo']="Home";
        
        
        $this->load->view('template/header');
        $this->load->view('home/home',$dados);
        $this->load->view('template/footer');
    }
    
    
}










