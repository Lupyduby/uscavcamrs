<?php

class Model_db extends CI_Model{

	public function addPerson($data){
		$result = $this->db->insert("Person", $data);
		return $result;
	}	

	public function  getValues(){

		$query = $this->db->query("Select * from user");	
		return $query->result();
	}

	public function addUser($data){
		$result = $this->db->insert("user", $data);
		return $result;
	}

	public function getPersonId(){
		$result = $this->db->query("Select Person_ID from person order by person_id DESC LIMIT 1");
		return $result->result();
	}
	
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



	public function validateUser($username, $pass){
		$query = $this->db->query("Select * from person where Person_Username=".$this->db->escape($username)." AND Person_Password=".$this->db->escape($pass));	
		return $query->row();
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
		$this->db->join('campus', 'asset.Campus_ID = campus.Campus_ID');

		$query = $this->db->get();
		echo $query->num_rows();
		return $query->result();
	}

	public function querySoft(){

		$this->db->select('person.Person_FName,
						   person.Person_LName,
						   campus.Campus_Name,
						   softwares.Software_title,
						   softwares.Software_runningTime,
						   softwares.Software_Code,
						   softwares.Software_Quantity,
						   softwares.Software_Status,
						   softwares.Software_CallNumber
						    ');
		$this->db->from('softwares');
		$this->db->join('campus', 'softwares.Campus_ID = campus.Campus_ID');
		$this->db->join('person', 'softwares.Person_ID = person.Person_ID');
	
		$query = $this->db->get();
		echo $query->num_rows();
		return $query->result();
	}
	


	public function queryClient(){

		$this->db->select('person.Person_FName,
						   person.Person_LName,
						   person.Person_Username,
						   person.Person_type,
						   user.User_college,
						   user.User_Office_Name,
						   studentorg.SO_Name				   
						    ');
		$this->db->from('person');
		$this->db->where('Person_type !=', "Staff");
		$this->db->where('Person_type !=', "WS");
		$this->db->join('studentorg', 'person.Person_ID = studentorg.Person_ID','left');
		$this->db->join('user', 'person.Person_ID = user.Person_ID', 'left');
				

		$this->db->order_by('Person_LName', 'asc');	
		$query = $this->db->get();




		
	
		
		echo $query->num_rows();
		return $query->result();
	}


	public function queryHall(){

		$this->db->select('hall.Hall_Name,
						   hall.Hall_Capacity,
						   hall.Hall_Desc,
						   campus.Campus_Name					   
						    ');
		$this->db->from('hall');
		$this->db->join('campus', 'hall.Campus_ID = campus.Campus_ID');
			
	
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

	public function queryWSDutySched(){
		$this->db->select('*');
		$this->db->from('dutysched');
		$query = $this->db->get();
		echo $query->num_rows();
		return $query->result();
	}

	public function updateEquip($data, $id){
		$this->db->where('Asset_id', $id);
		$this->db->update('asset', $data); 
	}





}//end of class




// Produces: 
// SELECT * FROM blogs
// JOIN comments ON comments.id = blogs