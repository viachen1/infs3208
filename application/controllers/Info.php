<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class info extends CI_Controller {
	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('info');
		
	}
	
}
?>