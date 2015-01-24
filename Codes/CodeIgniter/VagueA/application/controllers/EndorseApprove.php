<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EndorseApprove extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
		if(!$this->session->userdata('username'))
		{
			$this->load->view('content/homepage/homepage');
			$this->load->view('footer/footer');
		}

		else
			$this->load->view('content/homepage/homepage');
	}

	public function formConfirmation(){

		if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA")
		{
			$this->load->view('Header/approverHeader');
			$this->load->view('content/approver/FormConfirmation-approver');
			
		}

		else
		{
			$this->load->view('Header/endorserHeader');
			$this->load->view('content/endorser/FormConfirmation-endorser');
		}

		$this->load->view('Footer/footer');
	}
}