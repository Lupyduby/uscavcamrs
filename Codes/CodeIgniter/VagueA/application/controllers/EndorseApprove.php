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

	public function formConfirmationEndorse(){

		$this->load->model("model_db");
		$result['result'] = $this->model_db->queryForEndorse();
		$result['num']=count($result['result']);
		//print_r($result['result']);


		if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA")
		{
			$this->load->view('Header/approverHeader');
			$this->load->view('content/approver/FormConfirmation-approver', $result);
			
		}

		else
		{
			$this->load->view('Header/endorserHeader');
			$this->load->view('content/endorser/FormConfirmation-endorser', $result);
		}

		$this->load->view('Footer/footer');
	

	}

	public function formConfirmationApprove(){

		$this->load->model("model_db");
		$result['result'] = $this->model_db->queryForApprove();
		$result['num']=count($result['result']);

		if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA")
		{
			$this->load->view('Header/approverHeader');
			$this->load->view('content/approver/FormConfirmation-approver', $result);
			
		}

		else
		{
			$this->load->view('Header/endorserHeader');
			$this->load->view('content/endorser/FormConfirmation-approver', $result);
		}

		$this->load->view('Footer/footer');
	}

	public function endorseStatus(){
		$r_id = $this->input->post('id');
		$data = array( 'Reservation__Endorse_Status' => $this->session->userdata('fname')." ". $this->session->userdata('lname'));

		$this->load->model('model_db');
		$this->model_db->endorseStatus($r_id, $data);

		redirect('EndorseApprove/formConfirmationEndorse');

	}

	public function approveStatus(){
		$r_id = $this->input->post('id');
		$data = array( 'Reservation_Approve_Status' => $this->session->userdata('fname')." ". $this->session->userdata('lname'));

		$this->load->model('model_db');
		$this->model_db->endorseStatus($r_id, $data);

		redirect('EndorseApprove/formConfirmationApprove');

	}
}