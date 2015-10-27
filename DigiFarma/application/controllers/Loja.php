
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loja extends CI_Controller {
    public function produtos() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/cabecalho');
        $this->load->view('templates/menu');
        $this->load->view('produtos');
        $this->load->view('templates/rodape');
    }
}