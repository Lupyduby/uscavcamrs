<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->view('Header/homepageHeader');
		$this->load->view('content/homepage/homepage');
		$this->load->view('footer/footer');
	}

	public function guideline(){
		if($this->session->userdata('type'))
		{
			if($this->session->userdata('type')=="Dean" || $this->session->userdata('type')=="OSA")
			{
				$this->load->view('Header/endorserHeader');
					
			}

			else if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA")
			{
				$this->load->view('Header/approverHeader');
				
			}

			else if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else if ($this->session->userdata('type')=="WS")
			{
				$this->load->view('Header/wsHeader');
				
			}

			else
			{	
				$this->load->view('Header/userHeader');
			}
			
			$this->load->view('content/common/Guidelines-guidelines');
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}

	}
	
	

	public function reservation(){
		if($this->session->userdata('type'))
		{
			if($this->session->userdata('type')=="Dean" || $this->session->userdata('type')=="OSA")
			{
				$this->load->view('Header/endorserHeader');
					
			}

			else if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA")
			{
				$this->load->view('Header/approverHeader');
				
			}

			else if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else if ($this->session->userdata('type')=="WS")
			{
				$this->load->view('Header/wsHeader');
				
			}

			else
			{	
				$this->load->view('Header/userHeader');
			}

			$this->load->view('content/common/Reservation');
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}
	}

	

	public function ChangePass(){
		if($this->session->userdata('type'))
		{

		
			if($this->session->userdata('type')=="Dean" || $this->session->userdata('type')=="OSA")
			{
				$this->load->view('Header/endorserHeader');
					
			}

			else if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA")
			{
				$this->load->view('Header/approverHeader');
				
			}

			else if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else if ($this->session->userdata('type')=="WS")
			{
				$this->load->view('Header/wsHeader');
				
			}

			else
			{	
				$this->load->view('Header/userHeader');
			}
			$this->load->view('content/common/changePass');
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}
	}

	public function updatePass(){
		

		$this->load->library('form_validation');

		$this->form_validation->set_rules('oldpass', 'Username', 'required|md5|callback_validate_oldpass');
		$this->form_validation->set_rules('newpass', 'Password', 'required|matches[confirmpass]');
		$this->form_validation->set_rules('confirmpass', 'Password Confirmation', 'required');

		

		if($this->form_validation->run())
		{
			 $id = $this->session->userdata('person_id');
			 echo $this->session->userdata('person_id');
			$data = array('Person_Password'  => md5($this->input->post('newpass')));
			$this->load->model("model_db");
			$this->session->set_userdata('password', md5($this->input->post('newpass')));
			$this->model_db->updatePassword($data, $id);
			 echo "<br><br><br><br>". md5($this->input->post('newpass'));
			
			redirect('user/changePass');
			
	
		}
		else
		{
			
 				
 			if($this->session->userdata('type')=="Dean" || $this->session->userdata('type')=="OSA")
			{
				$this->load->view('Header/endorserHeader');
					
			}

			else if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA")
			{
				$this->load->view('Header/approverHeader');
				
			}

			else if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else if ($this->session->userdata('type')=="WS")
			{
				$this->load->view('Header/wsHeader');
				
			}

			else
			{	
				$this->load->view('Header/userHeader');
			}

			$this->load->view('content/common/changePass');
			$this->load->view('Footer/footer');
		}
		

		
	}

	public function validate_oldpass()
	{

		$this->load->model('model_db');
		
		if($result=$this->model_db->checkPass()){
			$this->form_validation->set_message('validate_oldpass', 'Password successfully changed!');
			return true;
		}else{
			$this->form_validation->set_message('validate_oldpass', 'Incorrect old password.');
			return false;
		}
		
	}

}