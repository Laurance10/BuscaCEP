<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * Autor: Victor Laurance
 * 
 * @property Controller
 */

class Home extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->library('curl');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function consulta() {

		$cep = $this->input->get('cep');

		echo $this->curl->consulta_cep($cep);
	}
}
