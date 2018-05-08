<?php include 'inc/header.php'; ?>
	<h2><?php echo $trip->name; ?></h2>
	
	<a href="edit-trip.php?id=<?php echo $trip->id; ?>" class="btn btn-default">Edit</a> 

			<form style="display:inline;" method="post" action="trip.php">
				<input type="hidden" name="del_id" value="<?php echo $trip->id; ?>">
				<input type="submit" class="btn btn-danger" value="Delete">
			</form>
	<hr>
	<p class="lead"><?php echo $trip->description; ?></p>
	<ul class="list-group">
		<li class="list-group-item"><strong>Where:</strong> <?php echo $trip->location; ?></li>
		<li class="list-group-item"><strong>When:</strong> <?php echo $trip->timing; ?></li>
		<li class="list-group-item"><strong>Lodging:</strong> <?php echo $lodging->name; ?></li>
	</ul>
	<br><br>
	<div class="well well-t">
	<h3>Things to Do <a class="right btn btn-default" href="create-activity.php?date_id=<?php echo $trip->id ?>">Add Activity</a></h3>
	<hr>
	<br>
	
	<?php 
	$activity = new Activities; 
	$relAct = $activity->getRelActivities($trip->id); 

	foreach($relAct as $a): ?>
      	<div class="row marketing poi">
	        <div class="col-md-10">
	          <h4><?php echo $a->name; ?></h4>
	          <p><?php echo $a->description; ?></p>     
	        </div>
			<a href="edit-activity.php?id=<?php echo $a->id; ?>&trip_id=<?php echo $a->date_id?>" class="btn btn-default">Edit</a>
				<form style="display:inline;" method="post" action="trip.php">
					<input type="hidden" name="a_del_id" value="<?php echo $a->id; ?>">
					<input type="submit" class="btn btn-danger" value="Delete">
				</form>
				
        </div> 
		
        <?php endforeach; ?> 
	
	</div>
	<a href="trips.php" class="btn btn-default btn-lg big"><span class="glyphicon glyphicon-arrow-left"></span></a>
	<br><br>

</div>
<?php include 'inc/footer2.php'; ?>