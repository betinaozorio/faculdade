<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlunoModel
 *
 * @author Administrador
 */
class ClienteModel extends CI_Model{
    
    function __construct() {
        //$this->load->database();
    }

    public function buscarTodos() {
        $query = $this->db->get('cliente');
        return $query->result_array();
    }
    
    public function excluir($id_cliente) {
        return $this->db->where('idcliente',$id_cliente)->delete('cliente');
    }
    
    public function gravar($cliente){
        return $this->db->insert('cliente', $cliente);
        
        
    }
    
    
}
