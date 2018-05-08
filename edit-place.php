<?php include_once 'config/init.php'; ?>

<?php
$place = new Places;

$place_id = isset($_GET['id']) ? $_GET['id'] : null;

$p = $place->getPlace($place_id);


if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();

	$data['name'] = $_POST['name'];
	$data['notes'] = $_POST['notes'];
	$data['place_type_id'] = $_POST['place_type_id'];
	
	if($place->update($place_id, $data)){
		redirect('places.php', 'Place has been updated.', 'success');
	} else {
		redirect('places.php', 'Something went wrong', 'error');
	}
}

$template = new Template('templates/place-edit.php');

$template->place = $p;
$template->place_types = $place->getTypes();


echo $template;