<?php
	class Activities{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		// Get all dates
		public function getAllActivities(){
			$this->db->query("SELECT activities.*, dates.name AS dname
						FROM activities 
						INNER JOIN dates
						ON activities.date_id = dates.id 
						ORDER BY post_date DESC 
						");
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
		public function getRelActivities($date_id){
			$this->db->query("SELECT * FROM activities WHERE date_id = :date_id");

			$this->db->bind(':date_id', $date_id);
			
			$results = $this->db->resultSet();
			
			return $results;

		}

		// Get Activity
		public function getActivity($id){
			$this->db->query("SELECT * FROM activities WHERE id = :id");

			$this->db->bind(':id', $id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}

		// Create place
		public function create($data){
			//Insert Query
			$this->db->query("INSERT INTO activities (name, description, date_id)
			VALUES (:name, :description, :date_id)");
			// Bind Data
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':date_id', $data['date_id']);

			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}

		public function tripGone($id){
		
			$this->db->query("DELETE FROM activities WHERE date_id = $id");
			
			if($this->db->execute()){
				return true;
			} else{
				return false;
			}
		}
		// Delete Date
		public function delete($id){
			//Insert Query
			$this->db->query("DELETE FROM activities WHERE id = $id");
			
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
			$this->db->query("UPDATE activities
				SET 
				name = :name,
				description = :description
				WHERE id = $id");
			// Bind Data
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':description', $data['description']);

			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
	}