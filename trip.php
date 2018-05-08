<?php include_once 'config/init.php'; ?>

<?php
$trip = new Dates;
$lodging = new Lodging;
$activity = new Activities;

if(isset($_POST['del_id'])){
	$del_id = $_POST['del_id'];
	if($trip->delete($del_id) && $lodging->delete($del_id) && $activity->tripGone($del_id)){
		redirect('trips.php', 'Trip removed.', 'success');
	} else {
		redirect('trips.php', 'Unable to remove trip.', 'error');
	}
}


$template = new Template('templates/trip-single.php');

$date_id = isset($_GET['id']) ? $_GET['id'] : null;



$template->trip = $trip->getDate($date_id);
$template->lodging = $lodging->getLodging($date_id);


if(isset($_POST['a_del_id'])){
	$a_del_id = $_POST['a_del_id'];
	if($activity->delete($a_del_id)){
		redirect($_SERVER['HTTP_REFERER'], 'Activity removed.', 'success');
		} else {
		redirect($_SERVER['HTTP_REFERER'], 'Unable to remove activity.', 'error');
		
		}
		
	}


//$template->activity = $activity->getRelActivities($date_id);

echo $template;