<?php include 'inc/header.php'; ?>
	<h2 class="page-header">New Activity</h2>
	<form method="post" action="create-activity.php?date_id=<?php echo $_GET['date_id'] ?>">

		<div class="form-group">
			<label class="big">Name</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group">
			<label class="big">Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<input type="submit" class="btn btn-default btn-lg" value="Save" name="submit">
	</form>
</div>
<?php include 'inc/footer2.php'; ?>