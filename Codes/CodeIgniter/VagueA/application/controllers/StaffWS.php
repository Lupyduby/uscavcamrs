<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StaffWS extends CI_Controller {

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
			$this->load->view('homepage');
			$this->load->view('footer/footer');
		}

		else
			$this->load->view('homepage');
	}

	public function register(){
		if($this->session->userdata('type'))
		{
			 if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('register');
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}
		
	}

	public function addUser(){

		if($this->session->userdata('type'))
		{
		
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

				if($data['results']==1)
				{
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

		else
		{
			$this->index();
		}
	
	}

	public function equipment(){
		if($this->session->userdata('type'))
		{	

			$this->load->model("model_db");
			$result['result'] = $this->model_db->queryEquip();
			$result['num']=count($result['result']);
			
			 if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('equipment', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}
	}

	public function software(){
		if($this->session->userdata('type'))
		{

			$this->load->model("model_db");
			$result['result'] = $this->model_db->querySoft();
			$result['num']=count($result['result']);

			 if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('software', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}
	}


	

	public function client(){
		if($this->session->userdata('type'))
		{

			$this->load->model("model_db");
			$result['result'] = $this->model_db->queryClient();
			$result['num']=count($result['result']);

			 if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('client', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}
	}


	public function hall(){
		if($this->session->userdata('type'))
		{

			$this->load->model("model_db");
			$result['result'] = $this->model_db->queryHall();
			$result['num']=count($result['result']);

			 if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('hall', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}
	}


	public function workingStudent(){
		if($this->session->userdata('type'))
		{

			$this->load->model("model_db");
			$result['result'] = $this->model_db->queryWSInfo();
			$result['num']=count($result['result']);
			$result['dutySched'] = $this->model_db->queryWSDutySched();
			$result['num2']=count($result['dutySched']);

			echo "Sched count: ".$result['num2'];

			 if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('workingStudent', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}
	}


	public function statistics(){
		if($this->session->userdata('type'))
		{
/*
			$this->load->model("model_db");
			$result['result'] = $this->model_db->queryWSInfo();
			$result['num']=count($result['result']);
			$result['dutySched'] = $this->model_db->queryWSDutySched();
			$result['num2']=count($result['dutySched']);

			echo "Sched count: ".$result['num2'];
*/
			 if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('statistics');
			$this->load->view('Footer/footer');
		}

		else
		{
			$this->index();
		}


	}


	public function updateEquipment(){

			$id = $this->input->post('id');

			$data = array(
                   'Campus_ID'  => $this->input->post('campus'),
                   'Asset_Name'     =>$this->input->post('name'),
                   'Asset_Brand' => $this->input->post('brand'),
                   'Asset_Serial' => $this->input->post('serial'),
                   'Asset_Remarks' => $this->input->post('remarks'),
                   'Asset_Quantity' => $this->input->post('qty')
                   );

			$this->load->model("model_db");
			$this->model_db->updateEquip($data, $id);
			
			

		$this->equipment();
	}

	public function deleteEquipment(){

	}



}