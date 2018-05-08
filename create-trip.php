<?php include_once 'config/init.php'; ?>

<?php
$trip = new Dates;
$lodging = new Lodging;

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	
	$data['category_id'] = 2;
	$data['name'] = $_POST['name'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['timing'] = $_POST['timing'];
	
	$trip->create($data);
	
	$l_data = array();
	$l_data['lodging_name'] = $_POST['lodging_name'];
	

	if($lodging->create($l_data)){
		redirect('trips.php', 'Your trip has been created.', 'success');
			
	} else {
		redirect('trips.php', 'Something went wrong!', 'error');
	}
}

$template = new Template('templates/trip-create.php');


echo $template;
