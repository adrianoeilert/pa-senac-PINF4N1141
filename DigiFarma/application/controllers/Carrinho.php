<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Carrinho extends CI_Controller {
    public function mostra() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('mostracarrinho');
        $this->load->view('templates/rodape');
    }
}