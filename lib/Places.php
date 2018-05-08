<?php
	class Places{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		public function getNewestPlace(){
			$this->db->query("SELECT * FROM places 
			WHERE category_id = 3 
			ORDER BY ID DESC LIMIT 1");
			
			$results = $this->db->resultSet();
			return $results;

		}
		

		// Get all dates
		public function getAllPlaces(){
			$this->db->query("SELECT places.*, place_type.name AS ptype
						FROM places 
						INNER JOIN place_type
						ON places.place_type_id = place_type.id 
						ORDER BY post_date DESC 
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		public function getAllDining(){
			$this->db->query("SELECT * FROM places
			WHERE place_type_id = 1
			ORDER BY post_date DESC
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}
		
		
		public function getAllRecreation(){
			$this->db->query("SELECT * FROM places
			WHERE place_type_id = 2
			ORDER BY post_date DESC
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}
		
		public function getAllPoi(){
			$this->db->query("SELECT * FROM places
			WHERE place_type_id = 3
			ORDER BY post_date DESC
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}
		// Get Categories
		public function getTypes(){
			$this->db->query("SELECT * FROM place_type");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get place By Category
		public function getAllByType($type){
			$this->db->query("SELECT * FROM places WHERE place_type_id = :type");
			// Assign Result Set
			$this->db->bind(':type', $type);
			
			$results = $this->db->resultSet();

			return $results;
		}

		// Get category
		public function getType($type_id){
			$this->db->query("SELECT * FROM place_type WHERE id = :type_id");

			$this->db->bind(':type_id', $type_id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}

		// Get Job
		public function getPlace($id){
			$this->db->query("SELECT * FROM places WHERE id = :id");

			$this->db->bind(':id', $id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}

		// Create place
		public function create($data){
			//Insert Query
			$this->db->query("INSERT INTO places (name, notes, place_type_id)
			VALUES (:name, :notes, :place_type_id)");
			// Bind Data

			$this->db->bind(':name', $data['name']);
			$this->db->bind(':notes', $data['notes']);
			$this->db->bind(':place_type_id', $data['place_type_id']);

			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}

		// Delete Date
		public function delete($id){
			//Insert Query
			$this->db->query("DELETE FROM places WHERE id = $id");
			
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
			$this->db->query("UPDATE places
				SET 
				name = :name,
				notes = :notes,
				place_type_id = :place_type_id
				WHERE id = $id");
			// Bind Data

			$this->db->bind(':name', $data['name']);
			$this->db->bind(':notes', $data['notes']);
			$this->db->bind(':place_type_id', $data['place_type_id']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
	}