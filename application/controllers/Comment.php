<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comment extends CI_Controller {
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->view('template/header');
		
		if($this->session->userdata('logged_in')){
			$this->load->view('comment');
		} else {
			$message = "Please login";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
		};
        $this->load->view('template/footer');
	}

    public function do_addComment() {
		$this->load->model('comment_model');
		
		$content = $this->input->post('content');
        $username = $this->session->userdata('username');
		$this->comment_model->addComment($content, $username);
		$this->load->view('template/header');
		$this->load->view('comment');
	}

    public function show_comment() {
        $this->load->model('comment_model');
		$username = $this->session->userdata('username');
		$commentList = $this->comment_model->getList($username);
		$this->load->view('template/header');
		$this->load->view('comment', ['commentList' => $commentList]);
		
    }
	
	
}
?>
