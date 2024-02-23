<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->library("session");
		$this->load->model("Instruments_model"				, "instruments");
		$this->load->model("Users_model"							, "users");

	}

	public function index()
	{
		$data = [];
		$data['row'] = $this->instruments->listAll();

		$this->template->show('home',$data);
	}
}
