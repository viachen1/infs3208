<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resetpwd extends CI_Controller {
	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('resetpwd');
		
	}
	
    public function do_reset()
	{
		$data['error']= "";
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		$repeatpwd = $this->input->post('repeatpwd');
		$question = $this->input->post('question');
		$answer = $this->user_model->getAnswer($username);
		foreach($answer as $row) {
			$answer = $row->question;
		}
		
		if ($password != $repeatpwd) {
			$this->load->view('template/header');
        	$this->load->view('resetpwd', array('error' => 'The two passwords are inconsistent <br/>'));
        	$this->load->view('template/footer');
		} else {
			if($question == $answer) {
				$this->load->model('user_model'); //load user model
				$this->user_model->updatePwd($username, $password);
				$this->load->view('template/header');
				$this->load->view('resetpwd', array('error' => 'reseted <br/>'));
				$this->load->view('template/footer');
			} else {
				$this->load->view('template/header');
				$this->load->view('resetpwd', array('error' => 'wrong answer <br/>'));
				
				$this->load->view('template/footer');
			}
			
		}

		
		
	}
}
?>


