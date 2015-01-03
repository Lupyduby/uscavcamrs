<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
		$this->load->view('homepage');
	}


	public function login(){
		$this->load->library('form_validation');

		{
			$data['username'] = $this->input->post('username');
			$data['pass'] = $this->input->post('pass');

			$this->load->model("model_db");
			$data['results'] = $this->model_db->validateUser($data['username'], $data['pass']);

			if($data['results']!=null)
			$this->load->view('success', $data);

			else
			{
				log_message('error', 'Invalid username or password!');
				$this->index();
			}
			
		}

	}

	public function register(){
		$this->load->view('register');
	}

	public function addUser(){


		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname', 'First name', 'required');
		$this->form_validation->set_rules('lastname', 'Last name', 'required');
		


		if (!$this->form_validation->run())
		{	

			$this->load->view('register');
		}
		else
		{	
			$data['fname'] = $this->input->post('firstname');
			$data['lname'] = $this->input->post('lastname');
			$data1=array(
				'Person_Email' => $this->input->post('email'),
				'Person_Password' => $this->input->post('pass'),
				'Person_Fname' => $this->input->post('firstname'),
				'Person_Lname' => $this->input->post('lastname'),
				'Person_Username' => $this->input->post('username'),	

			);
		$this->load->model("model_db");

		$data['results'] = $this->model_db->addPerson($data1);

		if($data['results']==1){
			$data['id'] = $this->model_db->getPersonId();
			$data2=array(
				"Person_ID" => $data['id'][0]->Person_ID,
				"Campus_ID" => $this->input->post('campus'),
				"College_ID" => $this->input->post('college'),
				"user_office_name" => $this->input->post('officeName'),
				"user_type" => $this->input->post('usertype')
			);

			$data['results2'] = $this->model_db->addUser($data2);
			$data['join'] = $this->model_db->joinData();


			$this->load->view('success', $data);	
		}
		//$this->load->view("view_DBValues", $data);
		
		
		}
	
	}

	public function getDB(){
 


	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */