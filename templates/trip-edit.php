<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Edit Trip</h2>
	<form method="post" action="edit-trip.php?id=<?php echo $trip->id; ?>">
		<div class="form-group">
			<label class="big">Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $trip->name; ?>">
		</div>
		<div class="form-group">
			<label class="big">Description</label>
			<textarea class="form-control" name="description"><?php echo $trip->description; ?></textarea>
		</div>
		<div class="form-group">
			<label class="big">Location</label>
			<input type="text" class="form-control" name="location" value="<?php echo $trip->location; ?>">
		</div>
		<div class="form-group">
			<label class="big">Lodging</label>
			<input type="text" class="form-control" name="lodging_name" value="<?php echo $trip_lodging->name; ?>">
		</div>
		<div class="form-group">
			<label class="big">When</label>
			<input type="text" class="form-control" name="timing" value="<?php echo $trip->timing; ?>">
		</div>

		<input type="submit" class="btn btn-default btn-lg" value="Save" name="submit">
	</form>
</div>
<?php include 'inc/footer2.php'; ?>