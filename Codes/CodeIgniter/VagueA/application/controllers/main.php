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

			print_r($data['results']);

			if($data['results']!=null)
			{
				
				$data['results2'] = $this->model_db->joinData($data['results']->Person_Username, $data['results']->Person_Password, $data['results']->Person_type);

				print_r($data['results2']);

				$info = array(
                   'person_id'  => $data['results2']->Person_ID,
                   'username'     => $data['results2']->Person_Username,
                   'password' => $data['results2']->Person_Password,
                   'fname' => $data['results2']->Person_Fname,
                   'lname' => $data['results2']->Person_Lname,
                   'email' => $data['results2']->Person_Email,
                   'type' => $data['results2']->Person_type,
               );

				$this->session->set_userdata($info);

				if($data['results2']->Person_type=="SO")
				{
					$info2=array(
					   'so_id' => $data['results2']->SO_ID,
	                   'so_type' => $data['results2']->SO_Type,
	                   'so_name' => $data['results2']->SO_Name
                   );
				}

				else if($data['results2']->Person_type=="Staff")
				{
					$info2=array(
					   'user_id' => $data['results2']->Staff_ID,
	                   'campus' => $data['results2']->Campus_ID,
	                   'position' => $data['results2']->Staff_Position
                   );
				}

				else if($data['results2']->Person_type=="WS")
				{
					$info2=array(
					   'ws_id' => $data['results2']->WorkingStudent_ID,
	                   'campus' => $data['results2']->Campus_ID,
	                   'hall' => $data['results2']->Hall_ID
                   );
				}

				else
				{
					$info2=array(
					   'user_id' => $data['results2']->User_ID,
	                   'campus' => $data['results2']->Campus_ID,
	                   'college' => $data['results2']->College_ID,
	                   'office' => $data['results2']->User_Office_Name
                   );
               	}

               	$this->session->set_userdata($info2);
				
				$this->home();
			}

			else
			{
				log_message('error', 'Invalid username or password!');
				$this->index();
			}
			
		
	}

	public function home(){
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

			$this->load->view('usershomepage');
			$this->load->view('Footer/footer');

		}

		else
		{
			$this->index();
		}
	}

	public function userRegister(){
		$this->load->view('Header/homepageHeader');
		$this->load->view('registration-user');
		$this->load->view('Footer/footer');
	}


	public function logOut(){
		$this->session->sess_destroy();
		$this->index();
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */