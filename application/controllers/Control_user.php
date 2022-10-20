<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_user extends CI_Controller {
	


	
	public function updatePwd()
	{
		$username = $this->input->post('username'); 
		$newPwd = $this->input->post('password'); 
		$this->load->model('user_model'); 
		$this->user_model->updatePwd($username, $newPwd);
        
		
	}
}
?>
