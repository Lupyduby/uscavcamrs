<?php

class Model_db extends CI_Model{


/*------------INSERT-----------------------*/
	public function addPerson($data){
		$result = $this->db->insert("Person", $data);
		return $result;
	}


	public function addUser($data){
		$result = $this->db->insert("user", $data);
		return $result;
	}

	public function addHall($data){
		$result = $this->db->insert("hall", $data);
		return $result;
	}

	public function addEquip($data){
		$result = $this->db->insert("asset", $data);
		return $result;
	}

	public function addSoftware($data){
		$result = $this->db->insert("softwares", $data);
		return $result;
	}

	public function addSO($data){
		$result = $this->db->insert("studentorg", $data);
		return $result;
	}

	public function addreservation($data){
		$result = $this->db->insert("reservation",$data);
		return $result;
	}


	public function addactivity($data){
		$res = $this->isActivityUnique($data);

		if(count($res)==0)
		$result = $this->db->insert($data);
		else
		$result=0;

		return $result;
	}

/*-----------------------------End of Insert--------------------*/



/*-----------------------------Query-----------------------*/


	public function validateUser(){
		$query = $this->db->query("Select * from person where Person_Username=".$this->db->escape($this->input->post('username'))." AND Person_Password=".$this->db->escape(md5($this->input->post('password'))));	
		return $query->row();
	}


	public function  getValues(){

		$query = $this->db->query("Select * from user");	
		return $query->result();
	}

	

	public function getPersonId(){
		$result = $this->db->query("Select Person_ID from person order by person_id DESC LIMIT 1");
		return $result->result();
	}


	public function queryEquip(){

		$this->db->select('asset.Asset_Name, 
							asset.Asset_ID,
							asset.Asset_Brand, 
							asset.Asset_Serial, 
							asset.Asset_Remarks, 
							asset.Asset_Quantity,
							campus.Campus_Name');
		$this->db->from('asset');
		$this->db->where('asset.Campus_ID =', $this->session->userdata('campus'));
		$this->db->join('campus', 'asset.Campus_ID = campus.Campus_ID', 'left');
		$this->db->order_by('Asset_Name', 'asc');	
		$query = $this->db->get();
		echo $query->num_rows();
		return $query->result();
	}

	public function querySoft(){

		$this->db->select('person.Person_FName,
						   person.Person_LName,
						   person.Person_Username,
						   campus.Campus_Name,
						   softwares.Software_ID,
						   softwares.Software_title,
						   softwares.Software_runningTime,
						   softwares.Software_Code,
						   softwares.Software_Quantity,
						   softwares.Software_Status,
						   softwares.Software_CallNumber
						    ');
		
		$this->db->from('softwares');
		$this->db->where('softwares.Campus_ID =', $this->session->userdata('campus'));
		
		$this->db->join('campus', 'softwares.Campus_ID = campus.Campus_ID', 'left');
		$this->db->join('person', 'softwares.Person_ID = person.Person_ID', 'left');
	
		$query = $this->db->get();
		echo $query->num_rows();
		return $query->result();
	}

	public function queryClient(){

		$this->db->select('person.Person_FName,
						   person.Person_LName,
						   person.Person_ID,
						   person.Person_Username,
						   person.Person_type,
						   user.User_college,
						   user.User_Office_Name,
						   studentorg.SO_Name,
						   user.Campus_ID				   
						    ');
		$this->db->from('person');
		$this->db->where('Person_type !=', "Staff");
		$this->db->where('Person_type !=', "WS");
		$this->db->join('studentorg', 'person.Person_ID = studentorg.Person_ID','left');
		$this->db->join('user', 'person.Person_ID = user.Person_ID', 'left');
				

		//$this->db->order_by('Person_LName', 'asc');	
		$query = $this->db->get();
		
		echo $query->num_rows();
		return $query->result();
	}


	public function queryHall(){

		$this->db->select('hall.Hall_Name,
							hall.Hall_ID,
						   hall.Hall_Capacity,
						   hall.Hall_Desc,
						   campus.Campus_Name					   
						    ');
		$this->db->from('hall');
		$this->db->where('hall.Campus_ID =', $this->session->userdata('campus'));
		$this->db->join('campus', 'hall.Campus_ID = campus.Campus_ID', 'left');
			
	
		$query = $this->db->get();
		echo $query->num_rows();
		return $query->result();
	}



	public function queryWSInfo(){

		$this->db->select('person.Person_FName,
						   person.Person_LName,
						   person.Person_Username,	
						   campus.Campus_Name,
						   hall.Hall_Name,
							');
		$this->db->from('workingstudent');
		
		$this->db->join('campus', 'workingstudent.Campus_ID = campus.Campus_ID');
		$this->db->join('person', 'workingstudent.Person_ID = person.Person_ID');
		$this->db->join('hall', 'workingstudent.Hall_ID = hall.Hall_ID');
				
	
		$query = $this->db->get();
		echo $query->num_rows();
		return $query->result();
	}

	public function queryPersonID(){
		$this->db->select_max('Person_ID');
		$query = $this->db->get('person');
		return $query;
	}

	public function queryCollegeReport(){
		$this->db->select('*');
		$this->db->from('college_report');
		$query = $this->db->get();
		return $query->result();
	}

	public function queryActivity(){
		$this->db->select('*');
		$this->db->from('activity');
		$query = $this->db->get();
		return $query->result();
	}

	public function checkPass()
	{
	$this->db->where('Person_Username', $this->session->userdata('username'));
		$this->db->where('Person_Password', md5($this->input->post('oldpass')));
		
		$query = $this->db->get('person');
		
		if($query->num_rows() == 1 )
		{
			return true;	
		}
		else
		{
			return false;
		}
	}


	public function queryForEndorse(){
		$this->db->select('reservation.*,
							hall.Hall_Name,
							campus.Campus_Name,
							activity.Activity_Name,
							person.Person_FName,
							person.Person_LName');
		$this->db->where('Endorsement_ID =', $this->session->userdata('ID'));
		$this->db->where('Reservation__Endorse_Status =', "Pending");
		$this->db->from('reservation');
		$this->db->join('campus', 'reservation.Campus_ID = campus.Campus_ID','left');
		$this->db->join('activity', 'reservation.Activity_ID = activity.Activity_ID','left');
		$this->db->join('hall', 'reservation.Hall_ID = hall.Hall_ID','left');
		$this->db->join('person', 'reservation.Person_ID = person.Person_ID','left');

		$query = $this->db->get();
		return $query->result();
	}

	public function queryForApprove(){
		$this->db->select('reservation.*,
							hall.Hall_Name,
							campus.Campus_Name,
							activity.Activity_Name,
							person.Person_FName,
							person.Person_LName');
		$this->db->where('Approval_ID =', $this->session->userdata('ID'));
		$this->db->where('Reservation_Approve_Status =', "Pending");
		$this->db->where('Reservation__Endorse_Status !=', "Pending");
		$this->db->from('reservation');
		$this->db->join('campus', 'reservation.Campus_ID = campus.Campus_ID','left');
		$this->db->join('activity', 'reservation.Activity_ID = activity.Activity_ID','left');
		$this->db->join('hall', 'reservation.Hall_ID = hall.Hall_ID','left');
		$this->db->join('person', 'reservation.Person_ID = person.Person_ID','left');

		$query = $this->db->get();
		return $query->result();
	}

	public function queryReservation($date){
		$this->db->select('*');
		$this->db->where('Reservation_Date >', $date);
		$this->db->from('Reservation');
		$result = $this->db->get();

		return $result->result();
	}

	public function getReservationId(){
		$result = $this->db->query("Select Reservation_ID from reservation order by reservation_id DESC LIMIT 1");
		return $result->result();
	}

	public function queryReservationList(){
		$this->db->select('*');
		$this->db->where('Person_ID =', $this->session->userdata('ID'));
		$this->db->from('Reservation');
		$this->db->join('campus', 'reservation.Campus_ID = campus.Campus_ID','left');
		$this->db->join('activity', 'reservation.Activity_ID = activity.Activity_ID','left');
		$this->db->join('hall', 'reservation.Hall_ID = hall.Hall_ID','left');
		$result = $this->db->get();

		return $result->result();
	}


	public function checkCampusReservation($campusID){
		$this->db->select('*');
		$this->db->where('Campus_ID =', $campusID);
		$this->db->from('Reservation');
		$result = $this->db->get();
		return $result->result();
	}

	public function checkCampusHallReservation($campusID, $hall){
		$this->db->select('*');
		$this->db->where('Campus_ID =', $campusID);
		$this->db->where('Hall_ID =', $hall);
		$this->db->from('Reservation');
		$result = $this->db->get();
		return $result->result();


	}

	public function checkCampusHallDateReservation($campusID, $hall, $date){
		$this->db->select('*');
		$this->db->where('Campus_ID =', $campusID);
		$this->db->where('Hall_ID =', $hall);
		$this->db->where('Reservation_Date =', $date);
		$this->db->from('Reservation');
		$result = $this->db->get();
		return $result->result();
	}

	public function isActivityUnique($name){
		$result = $this->db->query("Select Activity_ID from activity where Activity_Name='".$name."'");
		return $result->result();
	}

	public function getActivityId($name){
		$result = $this->db->query("Select * from activity where Activity_Name='".$name."' order by activity_id DESC LIMIT 1");
		return $result->result();
	}



	

	public function queryReservationSummary($id){
		$this->db->select('reservation.*,
							hall.Hall_Name,
							campus.Campus_Name,
							activity.Activity_Name,
							person.Person_FName,
							person.Person_LName');
		$this->db->where('Reservation_ID =', $id);
		$this->db->from('reservation');
		$this->db->join('campus', 'reservation.Campus_ID = campus.Campus_ID','left');
		$this->db->join('activity', 'reservation.Activity_ID = activity.Activity_ID','left');
		$this->db->join('hall', 'reservation.Hall_ID = hall.Hall_ID','left');
		$this->db->join('person', 'reservation.Person_ID = person.Person_ID','left');
		$query = $this->db->get();
		return $query->result();
	}

	public function querySoftwareReservation(){
		$this->db->select('*');
		$this->db->where('Reservation_ID =', $this->session->userdata('R_ID'));
		$this->db->where('Person_Username =', $this->session->userdata('username'));
		$this->db->from('softwares');
		$query = $this->db->get();
		return $query->result();
	}

	public function querySoftIDReservation($id){
		$this->db->select('*');
		$this->db->where('Software_ID =', $id);
		$this->db->from('softwares');
		$query = $this->db->get();
		return $query->result();
	}

	public function querySoftReservation(){

		$this->db->select('*
						    ');
		
		$this->db->from('softwares');
		$this->db->where('softwares.Campus_ID =', $this->session->userdata('campus_reservation'));
		
		$query = $this->db->get();
		echo $query->num_rows();
		return $query->result();
	}


/*-----------------------End of Query--------------------*/


/*-----------------------Join Data-------------------------*/
	
	public function joinData($username, $pass, $type){
		
		$this->db->select('*');
		$this->db->from('Person');
		$this->db->where('Person_Username', $username);
		$this->db->where('Person_Password', $pass); 

		if($type=="SO")
		{
			$this->db->join('studentorg', 'Person.Person_ID = studentorg.Person_ID');
		}

		else if($type=="Staff")
		{
			$this->db->join('staff', 'Person.Person_ID = staff.Person_ID');
		}

		else if($type=="WS")
		{
			$this->db->join('workingstudent', 'Person.Person_ID = workingstudent.Person_ID');
		}

		else
		{
			$this->db->join('User', 'Person.Person_ID = user.Person_ID');
		}

		$result=$this->db->get();
		return $result->row();
	}

/*--------------------------------End of Join Data---------------------------*/



	
/*--------------------------------Update----------------------------*/
	

	public function updateEquip($data, $id){
		$this->db->where('Asset_id', $id);
		$this->db->update('asset', $data); 
	}

	public function updateHall($data, $id){
		$this->db->where('Hall_id', $id);
		$this->db->update('hall', $data); 
	}

	public function updateSoftware($data, $id){
		$this->db->where('Software_id', $id);
		$result = $this->db->update('softwares', $data);
		return $result;
	}

	
	public function updatePassword($data, $id){
		$this->db->where('Person_id', $id);
		$result = $this->db->update('person', $data);
		return $result;
	}

	public function updateClient($data, $id){
		$this->db->where('Person_id', $id);
		$result = $this->db->update('person', $data);
		return $result;
	}

	public function updateUserCollege($data, $id){
		$this->db->where('Person_id', $id);
		$result = $this->db->update('user', $data);
		return $result;
	}

	public function updateSOName($data, $id){
		$this->db->where('Person_id', $id);
		$result = $this->db->update('studentorg', $data);
		return $result;
	}

	public function updateReservation($data){
		$this->db->where('Reservation_ID', $this->session->userdata('R_ID'));
		$result = $this->db->update('reservation', $data);
		$rID= array('R_ID' =>  '','campus_reservation' => '');
		//$this->session->unset_userdata($rID);
		return $result;
	}

	public function addActivityCount($data, $id){
		$this->db->where('Activity_ID', $id);
		$result = $this->db->update('activity', $data);
		return $result;
	}

	public function addSoftwareCount($id, $data){
		$this->db->where('Software_ID', $id);
		$result = $this->db->update('softwares', $data);
		return $result;
	}


/*-----------------------------End of Update----------------------------*/


/*--------------------------------Delete----------------------------*/
	
	public function deleteEquip($id){
		//$this->db->where('Asset_ID', $id);
		$result = $this->db->delete('asset', array('Asset_ID'=> $id));
		return $result;
	}

	public function deleteHall($id){
		//$this->db->where('Asset_ID', $id);
		$result = $this->db->delete('hall', array('Hall_ID'=> $id));
		return $result;
	}

	public function deleteSoftware($id){
		//$this->db->where('Asset_ID', $id);
		$result = $this->db->delete('softwares', array('Software_ID'=> $id));
		return $result;
	}

	public function deleteClient($id){
		//$this->db->where('Asset_ID', $id);
		$result = $this->db->delete('person', array('PErson_ID'=> $id));
		return $result;
	}
	public function deleteSO($id){
		//$this->db->where('Asset_ID', $id);
		$result = $this->db->delete('studentorg', array('PErson_ID'=> $id));
		return $result;
	}
	public function deleteUser($id){
		//$this->db->where('Asset_ID', $id);
		$result = $this->db->delete('User', array('PErson_ID'=> $id));
		return $result;
	}




/*------------------------------End of Delete----------------------------*/



}//end of class




// Produces: 
// SELECT * FROM blogs
// JOIN comments ON comments.id = blogs