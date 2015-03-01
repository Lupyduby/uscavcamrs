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

	//	echo $this->session->userdata('ID');

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
		$this->EmailEndorseApprove($r_id);

		redirect('EndorseApprove/formConfirmationEndorse');

	}

	public function disEndorseStatus(){
		$r_id = $this->input->post('id');
		
		$msg = $this->input->post('message');

		if($this->session->userdata('type')=="Dean")
			$data['Reservation__Endorse_Status'] = 'Disapprove';

		else
			$data['Reservation_Approve_Status'] = 'Disapprove';

		$data['Reservation_Message'] = $msg ;

	//	$data = array( 'Reservation__Endorse_Status' => 'Disapprove',
	//					'Reservation_Message' => $data['message']
	//					);

		$this->load->model('model_db');
		$this->model_db->disapproveEndorse($r_id, $data);
		$this->emailDisEndorseApprove($r_id, $msg);

		redirect('EndorseApprove/formConfirmationEndorse');

	}

	public function approveStatus(){
		$r_id = $this->input->post('id');
		$data = array( 'Reservation_Approve_Status' => $this->session->userdata('fname')." ". $this->session->userdata('lname'),
						'Reservation_Status' => "Approve");

		$this->load->model('model_db');
		$this->model_db->endorseStatus($r_id, $data);
		$this->EmailEndorseApprove($r_id);

		redirect('EndorseApprove/formConfirmationApprove');

	}


	
	public function EmailApprove(){
		$this->load->library('email');
		$this->load->model("model_db");

		$r_id = $this->input->post('id');
		$this->email->from('uscavcamrs@gmail.com', 'USC-AVC');
		
		$data['result'] = $this->model_db->queryforEmail($r_id);
			
		if($data['result'] != null){
				$this->email->to($data['result']->Person_Email);
				$this->email->subject('Reservation approval');
				$this->email->message('Hello' .$data['result']->Person_Fname. 'Your Reservation form is successfully approve by approver');
			}	 
		


		if($this->email->send()){
	//		echo 'it worke';
		}
		else{
			redirect('main/home');
		}
	}


	public function emailDisEndorseApprove($id, $dis){
				
		$this->load->library('email');	
	
		$this->load->model('model_db');
		$this->email->from('uscavcamrs@gmail.com', 'USC-AVC');
		$r_id = $this->input->post('id');
		$data['result'] = $this->model_db->queryforEmail($r_id);
			
		if($data['result'] != null)
		{
			$this->email->to($data['result'][0]->Person_Email);
			$this->email->subject('Reservation approval');

			$message = '<p> Hello ' .$data['result'][0]->Person_Fname. ' </p>' ; 



			if($this->session->userdata('type')=="Dean")
				$message .= '<p>Your Reservation '.$id.' form is failed to endorsed by '. $this->session->userdata('fname')." ". $this->session->userdata('lname').'</p>';
			
			else
				$message .= '<p>Your Reservation '.$id.' form is failed to approved by '. $this->session->userdata('fname')." ". $this->session->userdata('lname').'</p>';

				$message .= '<p>For the reason of:</p>';
				$message .= '<p>'.$dis.'</p>';


			$this->email->message($message);
		}	

		if($this->email->send()){
	//		echo 'it worke';
		}
		else{
	//		echo "it didn't worke";
		
		//	redirect('main/home');
		}

		//echo $this->email->print_debugger();
	}


	public function EmailEndorseApprove($id){
				
		$this->load->library('email');	
	
		$this->load->model('model_db');
		$this->email->from('uscavcamrs@gmail.com', 'USC-AVC');
		$r_id = $this->input->post('id');
		$data['result'] = $this->model_db->queryforEmail($r_id);
			
		if($data['result'] != null)
		{
			$this->email->to($data['result'][0]->Person_Email);
			$this->email->subject('Reservation approval');

			$message = '<p> Hello ' .$data['result'][0]->Person_Fname. ' </p>' ; 
			if($this->session->userdata('type')=="Dean")
			$message .= '<p>Your Reservation ID '.$id.' form is successfully endorsed by '. $this->session->userdata('fname')." ". $this->session->userdata('lname').'</p>';
			
			else
				$message .= '<p>Your Reservation '.$id.' form is successfully approved by '. $this->session->userdata('fname')." ". $this->session->userdata('lname').'</p>';

			$this->email->message($message);
		}	
		 
		if($this->email->send()){
	//		echo 'it worke';
		}
		else{
	//		echo "it didn't worke";
		
		//	redirect('main/home');
		}

		//echo $this->email->print_debugger();
	}



	
}