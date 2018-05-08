<?php include_once 'config/init.php'; ?>

<?php
$trip = new Dates;
$lodging = new Lodging;

$trip_id = isset($_GET['id']) ? $_GET['id'] : null;
$trip_lodging = $lodging->getLodging($trip_id);

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	$data['name'] = $_POST['name'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['timing'] = $_POST['timing'];
	
	$l_data = array();
	
	$l_data['lodging_name'] = $_POST['lodging_name'];
	
	$goto = 'trip.php?id='.$trip_id;
	if($trip->update($trip_id, $data) && $lodging->update($trip_lodging->id, $l_data)){
		redirect($goto, 'Your date has been updated.', 'success');
	} else {
		redirect($goto, 'Something went wrong!', 'error');
	}
}

$template = new Template('templates/trip-edit.php');

$template->trip = $trip->getDate($trip_id);
$template->categories = $trip->getCategories();
$template->trip_lodging = $trip_lodging;
echo $template;