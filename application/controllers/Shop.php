<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Shop_model');
		$this->load->view('template/header');
		

		$data = array(
			"courseName"=>null,
			"description"=>null,
			"price"=>null
		);
		$username = $this->input->post('username'); 


		$data['shop'] = $this->Shop_model->shopInfo($username);

		// if (isset($_POST["confirm"])) {
		// 	$this->load->model('Shop_model');

		// 	$this->shop_model->addItem($data->id);
		// };

		
		if($this->session->userdata('logged_in')){
			
			$this->load->view('shop', $data);
		} else {
			$message = "Please login";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
		};
        $this->load->view('template/footer');
	}

	public function doADD() {
		$data = $this->shop_model->getcourseID($_POST['itemID']);
	
		foreach($data as $row) {
			$data = $row->id;
		};
		$this->shop_model->addItem($data);
		redirect('shop');

		
		
	}
    
	public function removeAll() {
		if (isset($_POST['cartRemove'])) {

			$this->shop_model->removeCart($_POST['delateBtn']);
			redirect('shop');
		}
	}

	public function checkout() {
		if (isset($_POST['cartCheckout'])) {

			$this->load->view('paypal');
		}
	}

}
?>