<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('register');
		
		
	}


	
	public function do_register()
	{
		$data['error']= "";
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		$repeatpwd = $this->input->post('repeatpwd');
		$email = $this->input->post('email');
		$phoneNumber = $this->input->post('phoneNumber');
		$question = $this->input->post('question');
		
		if ($password != $repeatpwd) {
			$this->load->view('template/header');
        	$this->load->view('register', array('error' => 'The two passwords are inconsistent <br/>'));
        	$this->load->view('template/footer');
		} else if ($this->user_model->checkunique($username) == TRUE) {
			$this->load->view('template/header');
			$this->load->view('register', array('error' => 'This username already exist <br/>'));
			$this->load->view('template/footer');
		} else if ($this->user_model->checkEmial($email) == TRUE) {
			$this->load->view('template/header');
			$this->load->view('register', array('error' => 'This Email already exist <br/>'));
			$this->load->view('template/footer');
		} else if ($password > 15) {
			$this->load->view('template/header');
			$this->load->view('register', array('error' => 'password greater then 15 <br/>'));
			$this->load->view('template/footer');
		} else {
			$this->load->model('user_model'); 
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$this->user_model->register($username, $hash, $email, $phoneNumber, $question);
			$this->load->view('template/header');
			$this->load->view('register', array('error' => 'registed <br/>'));
			$this->load->view('template/footer');
		}

		
		
	}
}
?>
