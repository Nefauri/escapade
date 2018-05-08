<?php include_once 'config/init.php'; ?>

<?php
$place = new Places;



if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();

	$data['name'] = $_POST['name'];
	$data['notes'] = $_POST['notes'];
	$data['place_type_id'] = $_POST['place_type_id'];
	
	if($place->create($data)){
		redirect('places.php', 'Place has been created.', 'success');
	} else {
		redirect('places.php', 'Something went wrong', 'error');
	}
}

$template = new Template('templates/place-create.php');

$template->place_types = $place->getTypes();


echo $template;