<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Produtos extends CI_Controller {
    public function loja() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('produtos/produtos');
        $this->load->view('templates/rodape');
    }
    public function carrinho() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('produtos/mostracarrinho');
        $this->load->view('templates/rodape');
    }
    public function novo() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('produtos/form_produtos');
        $this->load->view('templates/rodape');
    }
    
    public function lista() {
        $produtos['produtos'] = $this->db->get('produtos')->result_array();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('produtos/lista_produtos', $produtos);
        $this->load->view('templates/rodape');
    }
}