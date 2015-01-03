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
	
	public function joinData(){
		$this->db->select('Person_ID');
		$this->db->from('user');
		$result = $this->db->join('Person', 'Person.Person_ID = user.Person_ID');
		return $result;
	}

	public function validateUser($username, $pass){
		$query = $this->db->query("Select * from person where person_username='".$username."' and person_password='".$pass."'");	
		
		return $query->result();
	}
	
}//end of class




// Produces: 
// SELECT * FROM blogs
// JOIN comments ON comments.id = blogs.id