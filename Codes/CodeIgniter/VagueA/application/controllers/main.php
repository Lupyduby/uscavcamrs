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
/*
		$this->load->model("model_db");
		$data['result'] = $this->model_db->queryReservation(date("Y/m/d")); 
		print_r($data['result']);

		echo "<br><br><br>".date_format( strtotime($data['result'][0]->Reservation_timeStart), "g:i A");

		if($data['result'][0]->Reservation_timeStart < date("g A"))
			echo "<br><br><br> YES!".date("g:i A")." ".date("Y/m/d");


		*/
/*				$info = array(60, 50, 40);
			$info3 = array(35, 57, 65);
			$info4 = array(39, 45, 43);
			$info5 = array(87, 87, 67);
			$info6 = array(50, 23, 33);
			
				for($i=1, $year = date("Y"); $i<13; $i++)
				{	
					$info2[] = $i;
				
				if(date("m") >= $i)
				{
					$yr = $year;
				}
				else
					$yr = $year-1;

				echo date("F", mktime(0, 0, 0, $i, 10))." ".$yr."<br>";

				$month[] =  array(date("F", mktime(0, 0, 0, $i, 10))." ".$yr);
			}

		//	$info= array();

			array_push($info, $info2);

			$results[] = array('name' => 'Rigney', 'data'=> $info5);
			$results[] = array('name' => 'HS', 'data'=> $info6);
			$results[] = array('name' => 'AS', 'data'=> $info3);
			$results[] = array('name' => 'Buttenbruch', 'data'=> $info4);

		 $results['monthJ'] = json_encode($month); 
		 $results['monthK'] = json_encode($results);
	//	print_r();
		//	echo $data['monthJ'];

	//	$this->load->view('Header/homepageHeader');
	//	$this->load->view('content/common/chart', $results);
	//	$this->load->view('footer/footer');
*/	
/*
		 $info = array(60, 50, 40);
			$info3 = array(35, 57, 65, 39, 45, 43);
			$info4 = array(39, 45, 43, 87, 87, 67);
			$info5 = array(87, 87, 67, 50, 23, 33);
			$info6 = array(50, 23, 33, 35, 57, 65);
			
				for($i=1, $year = date("Y"); $i<13; $i++)
				{	
					$info2[] = $i;
					
					if(date("m") >= $i)
					{
						$yr = $year;
					}
					else
					{
						$yr = $year-1;
					}
						

					echo date("F", mktime(0, 0, 0, $i, 10))." ".$yr."<br>";
					$month[] =  array(date("F", mktime(0, 0, 0, $i, 10))." ".$yr);
				}

		//	$info= array();

			array_push($info, $info2);

			$hallUsage[]= array('name' => 'Rigney', 'data'=> $info5);
			$hallUsage[] = array('name' => 'HS', 'data'=> $info6);
			$hallUsage[] = array('name' => 'AS', 'data'=> $info3);
			$hallUsage[] = array('name' => 'Buttenbruch', 'data'=> $info4);

		 $results['monthJ'] = json_encode($month); 
		 $results['monthK'] = json_encode($hallUsage);
	//	print_r();
			echo $results['monthJ'];
			echo "This s montK ".$results['monthK'];
			$results['monthL'] = $month;



			$pract[] = array('name' => 'Microphone');
			$pract[] = array('name' => 'Speaker');
			$pract[] = array('name' => 'Karaoke');
			$json = json_encode($pract);
			print_r($json); echo "<br><br>";
			$res = json_decode($json);
			print_r($res); echo count($res)."<br><br>";
			echo $res[0]->name;

*/
		$this->load->view('Header/homepageHeader');
		$this->load->view('content/homepage/homepage');
		$this->load->view('footer/footer');


	}


	public function recoverPassword(){
		$this->load->model("model_db");
		$resetEmail = $this->input->post('remail');
		$ran = rand(99999999, 99999999999999);
		$res = $this->model_db->checkEmail($resetEmail);
	//	echo $count = count($res);
	
		print_r($res);
	
		
		if($count)
		{
			$data = array('Person_Password' => md5($ran));

			$result = $this->model_db->updateResetPass($res[0]->Person_ID, $data);
			$this->load->library('email');	
			$this->email->from('uscavcamrs@gmail.com', 'USC-AVC');
			$this->email->to($resetEmail);
			$this->email->subject('Reset Password');
			$message = '<p> Hello '.$res[0]->Person_Fname.' </p>' ; 
			
			$message .= '<p>Your temporary password is '.$ran.' Please change your password as you log in to your  account.</p>';
			
			$this->email->message($message);
			
		 
		if($this->email->send()){
			$info = array('message' => 'Please see your email for your new password');
			$this->session->set_userdata($info);
		}
			else{
				$info = array('message' => 'Please try again!');
				$this->session->set_userdata($info);
			}
			redirect('main/forgotPassword');
		
		}
		else{
			$info = array('message' => 'Email does not exist!');
			$this->session->set_userdata($info);
			redirect('main/forgotPassword');
		}
	

	}

	public function login(){


			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean|callback_validate_user');

			$data['username'] = $this->input->post('username');
			$data['pass'] = $this->input->post('password');

			if($this->form_validation->run())
			{

				
				$data['results2'] = $this->model_db->joinData($this->session->userdata('username'), $this->session->userdata('password'), $this->session->userdata('type'));

				//print_r($data['results2']);

				$info = array(
                   'fname' => $data['results2']->Person_Fname,
                   'lname' => $data['results2']->Person_Lname,
                   'email' => $data['results2']->Person_Email,
                   'ID' => $data['results2']->Person_ID
               );

				$this->session->set_userdata($info);

	//			echo $this->session->userdata('ID');

				

				if($data['results2']->Person_type=="SO")
				{
					$info2=array(
					   'so_id' => $data['results2']->SO_ID,
	                   'so_type' => $data['results2']->SO_Type,
	                   'so_name' => $data['results2']->SO_Name
                   );
				}

				else if($data['results2']->Person_type=="Super" || $data['results2']->Person_type=="Staff")
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
	                   'college' => $data['results2']->user_college,
	                   'office' => $data['results2']->User_Office_Name
                   );
               	}

               	$this->session->set_userdata($info2);
				
	//	echo print_r($info);		
				redirect('main/home');

				
			}

			else
			{
				$this->load->view('Header/homepageHeader');
				$this->load->view('content/homepage/homepage');
				$this->load->view('footer/footer');
			}
			
		
	}


	public function validate_user()
	{
		$this->load->model("model_db");
		$data['result'] = $this->model_db->validateUser(); 
		
		print_r($data['result']);
			if($data['result']!=null)
			{
				$info = array(
                   'person_id'  => $data['result']->Person_ID,
                   'username'     => $data['result']->Person_Username,
                   'password' => $data['result']->Person_Password,
                   'type' => $data['result']->Person_type
                  );
				$this->session->set_userdata($info);
				return true;
			}
			else
			{
				$this->form_validation->set_message('validate_user', 'Incorrect username/passowrd.');
			return false;
			}

		
	}

	public function home(){
		if($this->session->userdata('type'))
		{
			date_default_timezone_set('asia/manila');

			$this->load->model("model_db");
			$data['result'] = $this->model_db->queryReservationToday(); 
			$data['num'] = count($data['result']);
			
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

			$this->load->view('content/common/usershomepage', $data);
			$this->load->view('Footer/footer');

		}

		else
		{
			redirect('main/index');
		}
	}

	public function userRegister(){
		$this->load->view('Header/homepageHeader');
		$this->load->view('content/homepage/registration-user');
		$this->load->view('Footer/footer');
	}

	public function forgotPassword(){
		$this->load->view('Header/homepageHeader');
		$this->load->view('content/homepage/forgotPassword');
		$this->load->view('Footer/footer');
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect('main/index');
	}

	function isEmailExist($email) {
	    $this->db->select('id');
	    $this->db->where('email', $email);
	    $query = $this->db->get('users');

	    if ($query->num_rows() > 0) {
	        return true;
	    } else {
	        return false;
	    }
	}

	
	public function EmailEndorse(){
		$this->load->library('email');
		
		$this->load->model("model_db");
		$data['result'] = $this->load->model_db->queryforEmail();
		
			if($data['result'] != null){
				$this->email->from('johngalexislyka@gail.com', 'USC-AVC');
				$this->email->to($data['result']->Person_Email);
				$this->email->subject('Reservation Endorsement');
				$this->email->message('Hello' .$data['result']->Person_Fname. 'Your Reservation form is successfully endorse by Endorser');
			}	 
		if($this->email->send()){
	//		echo 'workred';
		}
		else{
			redirect('main/home');
		}

	}

	

	public function disapprove(){
		$id = $this->input->post('id');
		$reason = $this->input->post('comment');
		$this->load->model("model_db");
		$res = $this->model_db->disApproves($id);
		redirect('endorseapprove/formConfirmationApprove');
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */