<?php include_once 'config/init.php'; ?>

<?php
$activity = new Activities;

$activity_id = isset($_GET['id']) ? $_GET['id'] : null;
$act = $activity->getActivity($activity_id);
$rel_trip = $_GET['trip_id'];

$goto = 'trip.php?id='.$rel_trip;
if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();

	$data['name'] = $_POST['name'];
	$data['description'] = $_POST['description'];

	
	if($activity->update($activity_id, $data)){
		redirect($goto, 'Activity has been updated.', 'success');
	} else {
		redirect($goto, 'Something went wrong!', 'error');
	}
}

$template = new Template('templates/activity-edit.php');

$template->activity = $activity;
$template->act = $act;

echo $template;