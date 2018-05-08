<?php
	class Dates{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}
		//Get newest date
		

		public function getNewestDate(){
			$this->db->query("SELECT * FROM dates 
			WHERE category_id = 1 
			ORDER BY ID DESC LIMIT 1");
			
			$results = $this->db->resultSet();
			return $results;

		}
		
		public function getNewestTrip(){
			$this->db->query("SELECT * FROM dates 
			WHERE category_id = 2 
			ORDER BY ID DESC LIMIT 1");
			
			$results = $this->db->resultSet();
			return $results;

		}
		public function getNewestTripId(){
			$this->db->query("SELECT MAX(id) FROM dates
			WHERE category_id = 2");
				
			$results = $this->db->resultSet();
			return $results;
		}
		// Get all dates
		public function getAllDates(){
			$this->db->query("SELECT * FROM dates
			WHERE category_id = 1
			ORDER BY post_date DESC
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}
		
		public function getAllTrips(){
			$this->db->query("SELECT * FROM dates
					WHERE category_id = 2
						ORDER BY post_date DESC 
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get Categories
		public function getCategories(){
			$this->db->query("SELECT * FROM categories");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get dates By Category
		public function getByCategory($category){
			$this->db->query("SELECT dates.*, categories.name AS cname 
						FROM dates 
						INNER JOIN categories
						ON dates.category_id = categories.id 
						WHERE dates.category_id = $category
						ORDER BY post_date DESC 
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get category
		public function getCategory($category_id){
			$this->db->query("SELECT * FROM categories WHERE id = :category_id");

			$this->db->bind(':category_id', $category_id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}

		
		// Get Job
		public function getDate($id){
			$this->db->query("SELECT * FROM dates WHERE id = :id");

			$this->db->bind(':id', $id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}

		// Create Date
		public function create($data){
			//Insert Query
			$this->db->query("INSERT INTO dates (category_id, name, description, location, timing)
			VALUES (:category_id, :name, :description, :location, :timing)");
			// Bind Data
			$this->db->bind(':category_id', $data['category_id']);
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':location', $data['location']);
			$this->db->bind(':timing', $data['timing']);
			
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
			
			$this->db->query("DELETE FROM dates WHERE id = $id");
			
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
		
		public function deleteTrip($id){

			$this->deleteTripActivities($id);
			//Insert Query
			$this->db->query("DELETE FROM dates WHERE id = $id");
			
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
		public function deleteTripActivities($id){
			$this->db->query("DELETE FROM activities WHERE date_id = $id");

			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		
		}

		// Update date
		public function update($id, $data){
			//Insert Query
			$this->db->query("UPDATE dates
				SET 
				name = :name,
				description = :description,
				location = :location,
				timing = :timing 
				WHERE id = $id");
			// Bind Data
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':location', $data['location']);
			$this->db->bind(':timing', $data['timing']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
	}