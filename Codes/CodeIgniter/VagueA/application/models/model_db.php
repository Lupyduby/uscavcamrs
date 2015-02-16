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

	public function addStaff($data){
		$result = $this->db->insert("staff",$data);
		return $result;
	}


	public function addactivity($data){
		$res = $this->db->insert('activity', $data);
		return $result;
	}

	public function insert_csv($data) {
        $this->db->insert('softwares', $data);
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
		if($this->session->userdata('type')!="Super")
		{
			$this->db->where('asset.Campus_ID =', $this->session->userdata('campus'));
		}
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
		if($this->session->userdata('type')!="Super")
		{
			$this->db->where('softwares.Campus_ID =', $this->session->userdata('campus'));	
		}
		$this->db->join('campus', 'softwares.Campus_ID = campus.Campus_ID', 'left');
		$this->db->join('person', 'softwares.Person_Username = person.Person_Username', 'left');
	
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
		if($this->session->userdata('type')!="Super")
		{		
				$this->db->where('Person_type !=', "Staff");
				$this->db->where('Person_type !=', "WS");
				
		}
		$this->db->where('Person_type !=', "Super");
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
		$this->db->order_by('Reservation_Date', 'DESC');
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
		$result = $this->db->query("Select * from activity where Activity_Name='".$name."' order by Activity_ID DESC LIMIT 1");
		return $result->result();
	}

	public function getActivityReservation($id){
		$result = $this->db->query("Select * from activity where Activity_ID='".$id."'");
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
		$this->db->from('softwares');
		$this->db->where('Software_ID =', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function querySoftReservation(){

		$this->db->select('*');
		$this->db->from('softwares');
		$this->db->where('softwares.Campus_ID =', $this->session->userdata('campus_reservation'));
		$this->db->where('softwares.Software_Status =', "Available");
		$query = $this->db->get();
		echo $query->num_rows();
		return $query->result();
	}


	public function queryCollegeID(){
		$this->db->select('*');
		$this->db->from('college_report');
		$this->db->where('college_report.college_Name =', $this->session->userdata('college'));
		$query = $this->db->get();
		return $query->result();
	}

	public function queryTodaySched(){
		$this->db->select('*');
		$this->db->where('Reservation_Date =', date("Y-m-d"));
		$this->db->from('Reservation');
		//$this->db->join('campus', 'reservation.Campus_ID = campus.Campus_ID','left');
		$this->db->join('activity', 'reservation.Activity_ID = activity.Activity_ID','left');
		$this->db->join('hall', 'reservation.Hall_ID = hall.Hall_ID','left');
		$this->db->order_by('Reservation_Date', 'DESC');
		$result = $this->db->get();

		return $result->result();
	}


	public function queryReservationToday(){
		date_default_timezone_set('asia/manila');
		$this->db->select('*');
		$this->db->where('Reservation_Date =', date("Y-m-d"));
		$this->db->from('Reservation');
		$this->db->join('person', 'reservation.Person_ID = person.Person_ID','left');
		$this->db->join('campus', 'reservation.Campus_ID = campus.Campus_ID','left');
		$this->db->join('activity', 'reservation.Activity_ID = activity.Activity_ID','left');
		$this->db->join('hall', 'reservation.Hall_ID = hall.Hall_ID','left');
		$this->db->order_by('Reservation_Date', 'DESC');
		$result = $this->db->get();

		return $result->result();
	}

	public function queryStaff(){

		$this->db->select('*,
			campus.Campus_Name
			');
		$this->db->from('staff');
		$this->db->where('Staff_Position !=', "DOL");	
		$this->db->join('person', 'staff.Person_ID = person.Person_ID', 'left');
		$this->db->join('campus', 'staff.Campus_ID = campus.Campus_ID', 'left');
				

		//$this->db->order_by('Person_LName', 'asc');	
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

		else if($type=="Staff" || $type=="Super")
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

	public function updateStaff($data, $id){
		$this->db->where('Staff_ID', $id);
		$result = $this->db->update('staff', $data);
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

	public function addCollegeCount($id, $data){
		$this->db->where('college_ID', $id);
		$result = $this->db->update('college_report', $data);
		return $result;
	}

	public function endorseStatus($id, $data){
		$this->db->where('Reservation_ID', $id);
		$result = $this->db->update('reservation', $data);
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
	public function deleteStaff($id){
		//$this->db->where('Asset_ID', $id);
		$result = $this->db->delete('staff', array('Person_ID'=> $id));
		return $result;
	}




/*------------------------------End of Delete----------------------------*/

/*------------Check if column exist-----------*/
public function checkColumnActivity(){
	return $this->db->field_exists("Activity_".$this->session->userdata('month'), 'activity');
}


/*--------------End of check of column exist--------------------*/

/*--------------Alter column --------------------*/

public function alterColumnActivity(){
	$res = $this->db->query("ALTER TABLE `activity` ADD `Activity_".$this->session->userdata('month')."` INT NOT NULL DEFAULT '0' AFTER `Activity_Name`");
	return $res;
}

public function alterColumnSoftware(){
	$res = $this->db->query("ALTER TABLE `softwares` ADD `Activity_".$this->session->userdata('month')."` INT NOT NULL DEFAULT '0' AFTER `Activity_Name`");
	return $res;
}

/*--------------End of Alter column --------------------*/


/*-------------Sum up column------------*/

public function sumColumnSoft($month){
	$res = $this->db->query("SELECT SUM(software_".$month.") as month FROM softwares");
	return $res->result();
}

/*-------------End Sum up column------------*/

}//end of class




// Produces: 
// SELECT * FROM blogs
// JOIN comments ON comments.id = blogs