<?php /*
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function logar() {
        $this->load->helper('html');
        $this->load->helper('url');
        $data = array(
            'login' => $this->input->post('login'),
            'senha' => $this->input->post('senha'),
            
           
        );
        $this->db->get('clientes', $data);
        redirect('/clientes/fazlogin', 'location', 301);
    }
    
}*/