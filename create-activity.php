<?php include_once 'config/init.php'; ?>

<?php
$activity = new Activities;

$date_id = $_GET['date_id'];
isset($_GET['date_id']) ? $_GET['date_id'] : $date_id;


if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();

	$data['name'] = $_POST['name'];
	$data['description'] = $_POST['description'];
	$data['date_id'] = $_GET['date_id'];
	
	$goto = 'trip.php?id='.$date_id;
	
	if($activity->create($data)){
		redirect($goto, 'Your activity has been created.', 'success');
	} else {
		redirect($goto, 'Something went wrong!', 'error');
	}
}

$template = new Template('templates/activity-create.php');

echo $template;