<?php include_once 'config/init.php'; ?>

<?php
$d = new Dates;

$date_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
	//Create Data Array
	$data = array();
	//$data['category_id'] = $_POST['category_id'];
	$data['name'] = $_POST['name'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['timing'] = $_POST['timing'];

	$goto = 'date.php?id='.$date_id;
	if($d->update($date_id, $data)){
		redirect($goto, 'Your date has been updated.', 'success');
	} else {
		redirect($goto, 'Something went wrong', 'error');
	}
}

$template = new Template('templates/date-edit.php');

$template->d = $d->getDate($date_id);
$template->categories = $d->getCategories();

echo $template;