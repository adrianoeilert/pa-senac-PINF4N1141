<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genericos extends CI_Controller {
	public function index()	{
                $this->load->helper('html');
                $this->load->helper('url');
		$this->load->view('templates/cabecalho');
                $this->load->view('genericos');
                $this->load->view('templates/rodape');
                
	}
}
