<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class map extends CI_Controller {
	public function index()
	{
		$data['error']= "";
		$this->load->helper('form');
		$this->load->helper('url');
        $this->load->view('template/header');
		if($this->session->userdata('logged_in')){
			
			$this->load->view('map');
		} else {
			$message = "Please login";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
		};
        $this->load->view('template/footer');
		
	}
    public function show_address()
    {
        if (isset($_POST["sumbit_address"])) {
            $address = $_POST["address"];
            ?>
    
            <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
            <?php    
        }
    }
	
    

}
?>