<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		//$this->load->model(array('Mod_Login'));
		if (!isset($this->session->userdata['id_pengguna'])) {
			redirect(base_url("index.php/login"));
		}
	}

	public function index() {
		$this->template('admin');
	}

	function template($content, $data=null)
	{
		$data['content'] = $this->load->view($content, $data, true);
		$this->load->view('template', $data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

}
