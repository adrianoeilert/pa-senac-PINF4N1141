<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clientes extends CI_Controller {
    
    public function index() {
        echo 'lista';
    }
    
    public function novo() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('clientes/form_clientes');
        $this->load->view('templates/rodape');
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
    
    public function salvar_novo() {
        $this->load->helper('html');
        $this->load->helper('url');
        $data = array(
            'nome' => $this->input->post('nome'),
            'login' => $this->input->post('login'),
            'cpf' => $this->input->post('cpf'),            
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
            'confirmasenha' => $this->input->post('confirmasenha'),
            'endereco' => $this->input->post('endereco'),
        );
        $this->db->insert('clientes', $data);
        redirect('/clientes/okcadastrado', 'location', 301);
    }
    
    public function editar($id) {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('pessoas/form_clientes');
        $this->load->view('templates/rodape');
        /* $this->load->helper('html');
          $this->load->helper('url');
          $this->load->database();
          $data = array(
          'nome' => $this->input->post('nome'),
          'login' => $this->input->post('login'),
          'cpf' => $this->input->post('cpf'),
          'data' => $this->input->post('data'),
          'email' => $this->input->post('email'),
          'senha' => $this->input->post('senha'),
          'confirmasenha' => $this->input->post('confirmasenha'),
          'endereco' => $this->input->post('endereco'),
          );
          $this->db->update('pessoas', $data);
          redirect('/pessoas/listapessoas', 'location', 301); */
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