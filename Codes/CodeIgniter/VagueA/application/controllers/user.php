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
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
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
			redirect('user/index');
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
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
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

			$this->load->view('content/common/FormValidation');
			$this->load->view('Footer/footer');
		}

		else
		{
			redirect('user/index');
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
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
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
			redirect('user/index');
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

				$info=array('successPass' => "Update password success!");
				$this->session->set_userdata($info);

			redirect('user/changePass');
		}
		else
		{
				//$info=array('failedPass' => "Update password failed!");
				//$this->session->set_userdata($info);
				$this->ChangePass();

		}	
	}

	public function validate_oldpass()
	{

		$this->load->model('model_db');

		if($result=$this->model_db->checkPass())
		{
			$this->form_validation->set_message('validate_oldpass', 'Password successfully changed!');
			return true;
		}
		else
		{
			$this->form_validation->set_message('validate_oldpass', 'Incorrect old password.');
			return false;
		}

	}

	public function calendar()
	{

		if($this->session->userdata('type'))
		{
			$this->load->view('content/common/calendar');		
		}
		else
		{
			redirect('user/index');
		}

	}


	public function validateForm()
	{


		redirect('user/formFull');
	}

	public function formFull()
	{
			$this->load->model("model_db");
			$result['result'] = $this->model_db->querySoftReservation();
			$result['activity'] = $this->model_db->queryActivity();
			$result['actNum'] = count($result['activity']);
			$result['num']=count($result['result']);

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
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
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
			$this->load->view('content/Common/formFull', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			redirect('user/index');
		}
	
	}

	public function formSummary(){
	
			$this->load->model('model_db');
			$result['reservation'] = $this->model_db->queryReservationSummary($this->session->userdata('R_ID'));
			$result['software'] = $this->model_db->querySoftwareReservation();
			$result['num'] = count($result['software']);

			if($this->session->userdata('type')=="Dean" || $this->session->userdata('type')=="OSA")
			{
				$this->load->view('Header/endorserHeader');
			}

			else if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA")
			{
				$this->load->view('Header/approverHeader');
			}
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
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
			$this->load->view('content/Common/formSummary', $result);
			$this->load->view('Footer/footer');

	}

	
	public function validateFormFull()
	{
		$this->load->model('model_db');
		//if there's no input in the Others
		//month in activity doesn;t exist yet
		
		//Activity Management
		if(empty($this->input->post('others')))
		{ 
			$act = $this->input->post('activity');
			$columnAct = "Activity_".$this->session->userdata('month');
			$res2 = $this->model_db->getActivityReservation($act);
			$data = array($columnAct => $res2[0]->$columnAct+1);
			$updateCount = $this->model_db->addActivityCount($data, $res2[0]->Activity_ID);
		}
		//if there's input in the Others
		else
		{
			$actNew = $this->input->post('others');
			$acti['Activity_Name'] = $actNew;
			$res = $this->model_db->addactivity($acti);
			$columnAct = "Activity_".$this->session->userdata('month');
			$res2 = $this->model_db->getActivityReservation($actNew);
			$data = array($columnAct => $res2[0]->$columnAct+1);
			$updateCount = $this->model_db->addActivityCount($data, $res2[0]->Activity_ID);
		}
		//getting input from the view	
		$purpose = $this->input->post('purpose');
		$equip = $this->input->post('equip');
		$soft = $this->input->post('software');

		$data = array (
						'Activity_ID' => $act,
		 				'Reservation_Purpose' => $purpose
						);
		if($this->session->userdata('type')=="Dean")
			$data['Reservation__Endorse_Status']="Approve";
		else if ($this->session->userdata('type')=="VPA" || $this->session->userdata('type')=="VPAA") {
			$data['Reservation__Endorse_Status']="Approve";
			$data['Reservation_Approve_Status']="Approve";
		}
		else
		{
			$data['Endorsement_ID']=28;
			$data['Approval_ID']=2;
		}

		if($equip)
		{
			for($i=0; $i<count($equip); $i++)
			{
				if($equip[$i]=="computer")
					$data['Reservation_Computer'] = 1;

				if($equip[$i]=="mic")
					$data['Reservation_DVDPlayer'] = 1;

				if($equip[$i]=="lcd")
					$data['Reservation_Mic'] = 1;

				if($equip[$i]=="dvd")
					$data['Reservation_LCD'] = 1;

				if($equip[$i]=="vhs")			
					$data['Reservation_VHS'] = 1;
			}
			$result = $this->model_db->updateReservation($data);
		}

		//Software Management
		
		echo "Equip count: ".count($equip);

		$columnSoft = "Software_".$this->session->userdata('month');
	
		if($soft)
		{
			for($j=0; $j<count($soft); $j++)
			{
				$softID = $this->model_db->querySoftIDReservation($soft[$j]);
				$softData = array(
							"Reservation_ID" => $this->session->userdata('R_ID'),
							"Person_Username" => $this->session->userdata('username'),
							 $columnSoft => $softID[0]->$columnSoft+1,
							"Software_Status" => "Borrowed"
							);
				$res = $this->model_db->addSoftwareCount($softID[0]->Software_ID, $softData);
			}
		}
	
		//College Management
			$columnCollege = "college_".$this->session->userdata('month');
			$collegeID = $this->model_db->queryCollegeID();
			$collegeData = array( "college_ID" => $this->session->userdata('college'),
								 $columnCollege => $collegeID[0]->$columnCollege+1);
			$res = $this->model_db->addCollegeCount($collegeID[0]->college_ID, $collegeData);



		redirect('user/formSummary');
	}


	public function addreservation()
	{
		$ok=0;
		//setting time zone PHILIPPINES
		date_default_timezone_set('asia/manila');

		$campusID = $this->input->post('campus');

		//getting values for validation
		if($campusID==3)
		{

			$hallID = $this->input->post('hall1');
			$timeStart = $this->input->post('timestartTC');
			$timeEnd = $this->input->post('timeendTC');
		}

		else if($campusID==1)
		{
			$hallID = $this->input->post('hall2');
			$timeStart = $this->input->post('timestartDC');
			$timeEnd = $this->input->post('timeendDC');
		}
		
		else
		{
			$hallID = $this->input->post('hall3');
			$timeStart = $this->input->post('timestartSC');
			$timeEnd = $this->input->post('timeendSC');
		}

		$date = $this->input->post('date');
/*
		
		$day = date("d", strtotime($date));
		$dateView = date("F d, Y", strtotime($date));
		$time  = date("h", strtotime($timeStart));

*/		
		$currentDate = date('Y-m-d H:i:s');
		$reserveDate = date("Y-m-d", strtotime($date. ' - 2 days'));
		echo $reserveDate;
		$month = date("F", strtotime($date));


		//add/subtract day to date
		//echo date('Y-m-d H:i:s', strtotime($currentDate. ' - 3 days'));

		//checking for month
		if( date("Y-m-d", strtotime($date)) >= $currentDate )
		{	
			if($reserveDate>$currentDate)
			{			
				echo $currentDate ;
						//checking for time of reservation
						if($timeStart <= $timeEnd)
						{
							
							//calling DB function
							$this->load->model('model_db');
			
							//checking for campus
							$res = $this->model_db->checkCampusReservation($campusID);
							if(count($res))
							{	
			
								echo count($res)." can insert campus <br>";
			
								//checking campus and hall
								$res = $this->model_db->checkCampusHallReservation($campusID, $hallID);
								if(count($res))
								{	
									echo count($res)." can insert campus&Time <br>";
									//checking campus and hall and date
									$res = $this->model_db->checkCampusHallDateReservation($campusID, $hallID, $date);
									if(count($res))
									{
										//values for checking the time
											
											$canInsert=0;
											$flag=0;
											for($i=0; $i<count($res) && $flag!=1; $i++)
											{
												echo  date("H:i", strtotime($timeStart))." - ".date("H:i", strtotime($timeEnd))."<br>";
												echo date("H:i", strtotime($res[$i]->Reservation_timeStart)). " - ".date("H:i", strtotime($res[$i]->Reservation_timeEnd))."<br>";
												
												if( date("H:i", strtotime($res[$i]->Reservation_timeStart)) < date("H:i", strtotime($timeEnd))  || date("H:i", strtotime($res[$i]->Reservation_timeStart)) <= date("H:i", strtotime($timeStart)) )
												{
													if( date("H:i", strtotime($res[$i]->Reservation_timeEnd)) >= date("H:i", strtotime($timeEnd)) || date("H:i", strtotime($res[$i]->Reservation_timeEnd)) > date("H:i", strtotime($timeStart)) )
														{
															$flag=1;
															echo "flag=1"."<br>";
														}
														else
														{
															echo "ok E.s "."<br>";
														}
												}
												else
												{
													echo "ok s.s "."<br>";
												}
			
			
			
											}
					
											if($flag==0)
											{
												echo count($res)." can insert timeChecking " . $i; 
												$ok=1;
											}
											else
											{
												$info=array('message' => "Schedule already reserved!");
												$this->session->set_userdata($info);
												redirect('user/reservation');
											}
										
									}
									else
									{
										echo "can insert campus&hall&date"; $ok=1;
									}
								}
								else
								{
									echo "can insert campus&hall"; $ok=1;
								}
			
							}
							else
							{
								echo "can insert campus"; $ok=1;
							}
									
							if($ok==1)
							{
								//saving values to the array
								$data = array (
										'Campus_ID' => $campusID,
										'Person_ID' => $this->session->userdata('ID'),
						 				'Hall_ID' => $hallID,
										'Reservation_Date' => $date,
										'Reservation_timeStart' => date("H:i", strtotime($timeStart)),
										'Reservation_timeEnd' => date("H:i", strtotime($timeEnd))
										);
								//inserting values to the DB
								$result = $this->model_db->addreservation($data);
								$this->session->set_userdata($data);
								$res = $this->model_db->getReservationId();
								$rID= array('R_ID' =>  $res[0]->Reservation_ID,
											'campus_reservation' => $campusID,
											'month' => $month);

								$this->session->set_userdata($rID);
							//	echo "<br><br><br> campus ID:".$campusID;
								redirect('user/formFull');
			
							}
							
							
						}
						else
								{
									$info=array('message' => "Time start/end is invalid!");
									$this->session->set_userdata($info);
									redirect('user/reservation');
								} 
			}
			else
			{
				$info=array('message' => "Rule violated: 3 days before reservation");
				$this->session->set_userdata($info);
				redirect('user/reservation');

			}
		}
			else
			{
				$info=array('message' => "Date is invalid!");
				$this->session->set_userdata($info);
				redirect('user/reservation');
			}
	}


	public function reservationList()
	{
			$this->load->model("model_db");
			$result['result'] = $this->model_db->queryReservationList();
			$result['num']=count($result['result']);

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
			else if ($this->session->userdata('type')=="Super")
			{
				$this->load->view('Header/superAdmin');
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
			$this->load->view('content/Common/reservationList', $result);
			$this->load->view('Footer/footer');
		}

		else
		{
			redirect('user/index');
		}
	}
		

}