<?php include_once 'config/init.php'; ?>

<?php
$d = new Dates;

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	$data['category_id'] = 1;
	$data['name'] = $_POST['name'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['timing'] = $_POST['timing'];

	if($d->create($data)){
		redirect('dates.php', 'Your date has been created.', 'success');
	} else {
		redirect('dates.php', 'Something went wrong!', 'error');
	}
}

$template = new Template('templates/date-create.php');


echo $template;