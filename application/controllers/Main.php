<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('categonries_model');
	}
	
	public function index()
	{
		$data['categonries']=$this->categonries_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/content',$data);
		$this->load->view('layout/left-menu');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
}