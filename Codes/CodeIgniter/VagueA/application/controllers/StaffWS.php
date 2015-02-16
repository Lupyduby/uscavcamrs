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
			$this->load->view('content/homepage/homepage');
			$this->load->view('footer/footer');
		}

		else
			$this->load->view('content/homepage/homepage');
	}

	public function register(){
		if($this->session->userdata('type'))
		{
			 if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('content/staffWS/register');
			$this->load->view('Footer/footer');
		}

		else
		{
			redirect('StaffWS/index');
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

				$this->load->view('content/staffWS/register');
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
			redirect('StaffWS/index');
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
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			if($this->session->userdata('type')=="Super")
			{
				$this->load->view('content/superAdmin/equipSuper', $result);
			}
			else
			{
				$this->load->view('content/staffWs/equipment', $result);
			}

			
			$this->load->view('Footer/footer');

			
		}

		else
		{
			redirect('StaffWS/index');
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
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			if($this->session->userdata('type')=="Super")
			{
				$this->load->view('content/superAdmin/softwareSuper', $result);
			}
			else
			{
				$this->load->view('content/staffws/software', $result);
			}
			
			$this->load->view('Footer/footer');
		}

		else
		{
			redirect('StaffWS/index');
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
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('content/staffws/client', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			redirect('StaffWS/index');
		}
	}


	public function hall(){
		if($this->session->userdata('type'))
		{

			$this->load->model("model_db");
			$result['result'] = $this->model_db->queryHall();
			$result['num']=count($result['result']);
			
			$this->load->view('Header/superAdmin');
			$this->load->view('content/superAdmin/hallSuper', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			redirect('StaffWS/index');
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
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('content/staffws/workingStudent', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			redirect('StaffWS/index');
		}
	}


	public function statistics(){
		if($this->session->userdata('type'))
		{

			$this->load->model("model_db");
			$result['college'] = $this->model_db->queryCollegeReport();
			$result['activity'] = $this->model_db->queryActivity();
			$result['numColl']=count($result['college']);
			$result['numAct']=count($result['activity']);

			for($i=1; $i<13; $i++){
				$month = date("F", mktime(0, 0, 0, $i, 10));
				
				$res = $this->model_db->sumColumnSoft($month);
				$result["".$month] = $res[0]->month;
				echo $res[0]->month;
			}



			

			 if ($this->session->userdata('type')=="Staff")
			{
				$this->load->view('Header/staffHeader');
				
			}
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
			}

			else
			{
				$this->load->view('Header/wsHeader');
				
			}

			
			$this->load->view('content/staffws/statistics', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			redirect('StaffWS/index');
		}


	}


	public function updateEquipment(){

		$id = $this->input->post('id');

		$data = array(
               'Asset_Name'     =>$this->input->post('name'),
               'Asset_Brand' => $this->input->post('brand'),
               'Asset_Serial' => $this->input->post('serial'),
               'Asset_Remarks' => $this->input->post('remarks'),
               'Asset_Quantity' => $this->input->post('qty')
               );

		$this->load->model("model_db");
		$this->model_db->updateEquip($data, $id);
			
		redirect('StaffWS/equipment');
	}


	public function updateHall(){

			$id = $this->input->post('id');

			$data = array(
                   'Hall_Name'  => $this->input->post('name'),
                   'Hall_Capacity'     =>$this->input->post('capacity'),
                   'Hall_Desc' => $this->input->post('description')
                   );

			$this->load->model("model_db");
			$this->model_db->updateHall($data, $id);
			
			

		redirect('StaffWS/hall');
	}


		public function updateSoft(){

			$id = $this->input->post('id');

			$data = array(
                   'Software_CallNumber'  => $this->input->post('cnum'),
                   'Software_title'     =>$this->input->post('title'),
                   'Software_runningTime' => $this->input->post('runtime'),
                   'Software_Code'  => $this->input->post('code'),
                   'Software_Quantity'     =>$this->input->post('qty'),
                   'Software_Status' => $this->input->post('status'),
                   'Person_Username' => $this->input->post('username')
                   );

			$this->load->model("model_db");
			$this->model_db->updateSoftware($data, $id);
			
			

		redirect('StaffWS/software');
	}


		public function updateClient(){

			$id = $this->input->post('id');

			$data = array(
                   'Person_Lname'  => $this->input->post('lname'),
                   'Person_Fname'     =>$this->input->post('fname'),
                   'Person_type' => $this->input->post('type'),
                   
                   );

			if($this->input->post('type')=="SO") 
				$data2 = array('SO_Name'  => $this->input->post('officeName'));
			else if ($this->input->post('type')=="OSA" || $this->input->post('type')=="Dean" || $this->input->post('type')=="Office" || $this->input->post('type')=="VPA" || $this->input->post('type')=="VPAA" )
				$data2 = array('User_Office_Name'  => $this->input->post('officeName'));
			else 
				$data2 = array('User_college'  => $this->input->post('officeName'));
			

			$this->load->model("model_db");
			$this->model_db->updateClient($data, $id);
			if($this->input->post('type')=="SO")
			$this->model_db->updateSOName($data2, $id);
			else
			$this->model_db->updateUserCollege($data2, $id);
			

		redirect('StaffWS/client');
	}

	public function resetPassword(){ 
		$data2 = array('Person_Password' =>md5($this->input->post('username')));
		$id = $this->input->post('id');
		$this->load->model("model_db");

		$res = $this->model_db->updatePassword($data2, $id);
		redirect('StaffWS/client');
	}

	public function deleteEquipment(){
		$id = $this->input->post('id');
		$this->load->model("model_db");
		$res = $this->model_db->deleteEquip($id);
		redirect('StaffWS/equipment');
	}

	public function deleteClient(){
		$id = $this->input->post('id');
		$this->load->model("model_db");
		$res = $this->model_db->deleteClient($id);

		if($this->input->post('type')=="SO") 
			 $this->model_db->deleteSO($id);
		else 
			$this->model_db->deleteUser($id);

		redirect('StaffWS/client');
	}


	public function deleteHall(){
		$id = $this->input->post('id');
		$this->load->model("model_db");
		$res = $this->model_db->deleteHall($id);
		redirect('StaffWS/hall');
		
	}

	public function deleteSoft(){
		$id = $this->input->post('id');
		$this->load->model("model_db");
		$res = $this->model_db->deleteSoftware($id);
		redirect('StaffWS/software');
		
	}

	public function addEquipment(){
		$data = array(
                   'Campus_ID'  => $this->session->userdata('campus'),
                   'Asset_Name'     =>$this->input->post('name'),
                   'Asset_Brand' => $this->input->post('brand'),
                   'Asset_Serial' => $this->input->post('serial'),
                   'Asset_Remarks' => $this->input->post('remarks'),
                   'Asset_Quantity' => $this->input->post('qty')
                   );
		$this->load->model("model_db");
		$result = $this->model_db->addEquip($data);
		//echo "<br><br><br><br><br><br>".$result;
		redirect('StaffWS/equipment');
	}




	public function addHall(){
			$data1=array(
					'Campus_ID' => $this->input->post('campus'),
					'Hall_Name' => $this->input->post('name'),
					'Hall_Capacity' => $this->input->post('capacity'),
					'Hall_Desc' => $this->input->post('desc'),
					'Hall_Remarks' => "Functioning"	
				);

				$this->load->model("model_db");

				$data['results'] = $this->model_db->addHall($data1);
				redirect('StaffWS/hall');
	}

	public function addSoftware(){
			$data1=array(
					'Campus_ID' => $this->session->userdata('campus'),
					'Software_CallNumber' => $this->input->post('cnum'),
					'Software_title' => $this->input->post('title'),
					'Software_runningTime' => $this->input->post('runtime'),
					'Software_code' => $this->input->post('code'),
					'Software_quantity' => $this->input->post('qty'),
					'Software_status' => "Available",
					'Person_Username' => "N/A"

				);

				$this->load->model("model_db");

				$data['results'] = $this->model_db->addSoftware($data1);
				redirect('StaffWS/software');
	}


	public function addClient(){

			if($this->input->post('type')=="SOC" || $this->input->post('type')=="SOE")
				$type="SO";
			else
				$type = $this->input->post('type');


			$person=array(
					'Person_Username' => $this->input->post('idNum'),
					'Person_Password' => md5($this->input->post('idNum')),
					'Person_Fname' => $this->input->post('fname'),
					'Person_Lname' => $this->input->post('lname'),
					'Person_Email' => $this->input->post('email'),
					'Person_type' => $type,
			);

			$this->load->model("model_db");

			$this->model_db->addPerson($person);
			$result = $this->model_db->getPersonId();
			$id = $result[0]->Person_ID;
			

			if($this->input->post('type')=="SOC" || $this->input->post('type')=="SOE")
			{
				if($this->input->post('type')=="SOE")
					$SO_type="Extra-Curricular";
				else
					$SO_type="Co-Curricular";

					$so=array(
							'Person_ID' => $id,
							'SO_type' => $SO_type,
							'SO_Name' => $this->input->post('officeName')
					);

				$this->model_db->addSO($so);

			}
			else
			{
				$user=array(
					'Person_ID' => $id,
					'Campus_ID' => $this->session->userdata('campus'),
					'User_college' => $this->input->post('college'),
					'User_Office_Name' => $this->input->post('officeName')
				);

				$this->model_db->addUser($user);
			}
				
				redirect('StaffWS/client');
	}




}