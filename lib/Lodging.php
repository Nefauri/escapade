<?php
	class Lodging{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		// Get relevant lodgings
		public function getAll(){
			$this->db->query("SELECT * from lodging");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}


		// Get related date (trip)
		public function getRelDate($date_id){
			$this->db->query("SELECT * FROM dates WHERE id = :date_id");

			$this->db->bind(':date_id', $date_id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}
		// Get related date (trip)
		public function getLodging($trip_id){
			$this->db->query("SELECT * FROM lodging WHERE date_id = :trip_id");

			$this->db->bind(':trip_id', $trip_id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}
		

		// Create place
		public function create($data){
			//Insert Query

			
			$this->db->query("INSERT INTO lodging (name, date_id)
			VALUES (:name, :date_id)");
			// Bind Data
			$this->db->bind(':name', $data['lodging_name']);
			$this->db->bind(':date_id', $data['date_id']);

			//Execute
			if($this->db->execute()){
				$this->setTripId();
				return true;
			} else {
				return false;
			}
	
		}
		
		public function setTripId(){
		
			$this->db->query("UPDATE lodging SET lodging.date_id 
			= (SELECT MAX(id) FROM dates WHERE category_id = 2) 
			WHERE lodging.date_id IS NULL");
			
			if($this->db->execute()){
				return true;
			} else{
				return false;
			}
		}
		
		

		// Delete Date
		public function delete($id){
			//Insert Query
			$this->db->query("DELETE FROM lodging WHERE date_id = $id");
			
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}

		// Update date
		public function update($id, $data){
			//Insert Query
			$this->db->query("UPDATE lodging
				SET name = :lodging_name
				WHERE id = $id");
			// Bind Data

			$this->db->bind(':lodging_name', $data['lodging_name']);

			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
	}