<?php include_once 'config/init.php'; ?>

<?php
$date = new Dates;

if(isset($_POST['del_id'])){
	$del_id = $_POST['del_id'];
	if($date->delete($del_id)){
		redirect('dates.php', 'Your date has been removed.', 'success');
	} else {
		redirect('dates.php', 'Unable to remove date.', 'error');
	}
}

$template = new Template('templates/date-single.php');

$date_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->date = $date->getDate($date_id);

echo $template;