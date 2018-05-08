<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Plan Trip</h2>
	<form method="post" action="create-trip.php">
		<div class="form-group">
			<label class="big">Name</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group">
			<label class="big">Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<div class="form-group">
			<label class="big">Location</label>
			<input type="text" class="form-control" name="location" >
		</div>
		<div class="form-group">
			<label class="big">Lodging</label>
			<input type="text" class="form-control" name="lodging_name">
		</div>
		<div class="form-group">
			<label class="big">When</label>
			<input type="text" class="form-control" name="timing">
		</div>

		<input type="submit" class="btn btn-default btn-lg" value="Save" name="submit">
	</form>
</div>
<?php include 'inc/footer2.php'; ?>