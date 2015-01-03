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
		$this->load->view('Header/homepageHeader');
		$this->load->view('homepage');
		$this->load->view('footer/footer');
	}


	public function login(){


			$this->load->library('form_validation');

		
			$data['username'] = $this->input->post('username');
			$data['pass'] = $this->input->post('password');

			$this->load->model("model_db");
			$data['results'] = $this->model_db->validateUser($data['username'], $data['pass']);

			if($data['results']!=null)
			{
				$data['results2'] = $this->model_db->joinData($data['username'], $data['pass']);

				$info = array(
                   'person_id'  => $data['results2']->Person_ID,
                   'username'     => $data['results2']->Person_Username,
                   'password' => $data['results2']->Person_Password,
                   'fname' => $data['results2']->Person_Fname,
                   'lname' => $data['results2']->Person_Lname,
                   'email' => $data['results2']->Person_Email,
                   'user_id' => $data['results2']->User_ID,
                   'campus' => $data['results2']->Campus_ID,
                   'college' => $data['results2']->College_ID,
                   'office' => $data['results2']->User_Office_Name,
                   'type' => $data['results2']->User_type
               );

				$this->session->set_userdata($info);

				$this->home();
			}

			else
			{
				log_message('error', 'Invalid username or password!');
				$this->index();
			}
			
		
	}

	public function home(){
		if($this->session->userdata('user_id'))
		{
			if($this->session->userdata('type')=="Dean" || $this->session->userdata('type')=="OSA")
			{
				$this->load->view('Header/endorserHeader');
				$this->load->view('endorserhomepage');	
			}

			else if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA")
			{
				$this->load->view('Header/vpaaHeader');
				$this->load->view('vpaahomepage');
			}

			else
			{	
				$this->load->view('Header/userHeader');
				$this->load->view('usershomepage');	
				
			}
			$this->load->view('Footer/footer');

		}

		else
		{
			$this->index();
		}
	}

	public function userRegister(){
		$this->load->view('registration-user');
	}


	public function logOut(){
		$this->session->sess_destroy();
		$this->index();
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */