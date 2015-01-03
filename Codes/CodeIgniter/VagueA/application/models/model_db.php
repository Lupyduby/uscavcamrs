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
	
	public function joinData($username, $pass){
		$this->db->select('*');
		$this->db->from('Person');
		$this->db->where('Person_Username', $username);
		$this->db->where('Person_Password', $pass); 
		$this->db->join('User', 'Person.Person_ID = user.Person_ID');
		$result=$this->db->get();
		return $result->row();
	}

	public function validateUser($username, $pass){
		$query = $this->db->query("Select * from person where person_username='".$username."' and person_password='".$pass."'");	
		
		return $query->row();
	}
	
}//end of class




// Produces: 
// SELECT * FROM blogs
// JOIN comments ON comments.id = blogs