<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login" and $this->session->userdata('lv_user') != "pengguna"){
			redirect(base_url("login"));
		}
		date_default_timezone_set("Asia/Bangkok");
		$this->load->model('m_general');
	}	
	
	public function index()
	{
		$this->load->view('v_pengguna_header');
		$this->load->view('v_index');
		$this->load->view('v_main_footer');
	}
}