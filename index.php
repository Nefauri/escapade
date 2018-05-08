<?php include_once 'config/init.php'; ?>

<?php
$date = new Dates;
$place = new Places;
$activity= new Activities;
$trip = $date;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
		$template->dates = $date->getByCategory($category);
		$template->title = 'Dates in '. $date->getCategory($category)->name;
} else {
		$template->title = 'Latest Dates';
		$template->dates = $date->getNewestDate();
		$template->trips = $trip->getNewestTrip();
}

//$template->places = $place->getNewestPlace();

$template->categories = $date->getCategories();

$template->activities = $activity->getAllActivities();

echo $template;