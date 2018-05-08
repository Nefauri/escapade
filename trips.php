<?php include_once 'config/init.php'; ?>
<?php include 'templates/inc/header.php'; ?>

<br><br>
<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="jumbotron j-trip">
				<h1>Trips</h1>
			</div>
		<div class="col-md-2"></div>
</div>
</div>

<div class="middle">
	<a class="btn btn-default btn-lg" href="create-trip.php">Plan Trip</a>
</div>

	<?php 
	$trip = new Dates; 
	$trips = $trip->getAllTrips(); 
	

	foreach($trips as $trip): ?>
      	<div class="row marketing">
	        <div class="col-md-10">
	          <h3><?php echo $trip->name; ?></h3>
	          <h4><?php echo $trip->description; ?></h4>     
	        </div>
	        <div class="col-md-2">
	        		<a class="btn btn-default btn-lg" href="trip.php?id=<?php echo $trip->id; ?>">View</a>
	        </div>
        </div> 
		<hr>		
        <?php endforeach; ?> 
</div>
</div>

<?php include 'templates/inc/footer2.php'; ?>