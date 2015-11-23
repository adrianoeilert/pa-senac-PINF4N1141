<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientes extends CI_Controller {
    
      
    public function novo() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('clientes/form_clientes');
        $this->load->view('templates/rodape');
    }
    
     public function salvar_novo() {
        $this->load->helper('html');
        $this->load->helper('url');
        $data = array(
            'nome' => $this->input->post('nome'),
            'login' => $this->input->post('login'),
            'CPF' => $this->input->post('CPF'),            
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
            'confirmasenha' => $this->input->post('confirmasenha'),
            'endereco' => $this->input->post('endereco'),
        );
        $this->db->insert('clientes', $data);
        redirect('/clientes/okcadastrado');
    }
        
    
    public function editar($id) {
        $editarclientes['clientes'] = $this->db->get_where('clientes', array('idpessoas' => $id))->result_array();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('pessoas/form_clientes', $editarclientes);
        $this->load->view('templates/rodape');
    
    }
    
      public function atualizar() {
        $this->load->helper('url');       
        $id = $this->input->post('id');
        $data1 = array(
            'nome' => $this->input->post('nome'),
            'login' => $this->input->post('login'),
            'cpf' => $this->input->post('cpf'),            
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
            'confirmasenha' => $this->input->post('confirmasenha'),
            'endereco' => $this->input->post('endereco'),
        );
        $this->db->where('idpessoas', $id);
        $this->db->update('clientes', $data1);
        redirect('/clientes/lista');
     }
     
        
    
    public function deletar($id) {
         $this->load->helper('url');
        $this->load->database();
        if ($this->db->delete('clientes', array('idpessoas' => $id))) {
        redirect('/clientes/lista');
        } else {
            var_dump($this->db);
        }
    }

     public function lista() {
        $clientes['clientes'] = $this->db->get('clientes')->result_array();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('clientes/listar_clientes', $clientes);
        $this->load->view('templates/rodape');
    
    }
    
    
 public function okcadastrado() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('clientes/cadastrado');
        $this->load->view('templates/rodape');

 }
}