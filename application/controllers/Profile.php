<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('User_model');
		$this->load->view('template/header');
		
		$data = array(
			"username"=>null,
			"email"=>null,
			"phoneNumber"=>null
		);
		$username = $this->input->post('username'); 
		$data['username'] = $this->User_model->getUserInfo($username);
		if($this->session->userdata('logged_in')){
			
			$this->load->view('profile', $data);
		} else {
			$message = "Please login";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
		};
        $this->load->view('template/footer');
		
	}


    public function changeInfo()
	{
		$data['error']= "";
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		$repeatpwd = $this->input->post('repeatpwd');
		$email = $this->input->post('email');
		$phoneNumber = $this->input->post('phoneNumber');
		
		if ($password != $repeatpwd) {
			$this->load->view('template/header');
        	$this->load->view('profile', array('error' => 'The two passwords are inconsistent <br/>'));
        	$this->load->view('template/footer');
		} else {
			$this->load->model('user_model'); //load user model
			$this->user_model->updatePersonalInfo($username, $password, $email, $phoneNumber);
			$this->load->view('template/header');
			$this->load->view('profile', array('error' => 'changed <br/>'));
			$this->load->view('template/footer');
		}
	}

	
    


}
?>