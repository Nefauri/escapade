<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Edit Activity</h2>
	<form method="post" action="edit-activity.php?id=<?php echo $act->id; ?>&trip_id=<?php echo $act->date_id?>">

		<div class="form-group">
			<label class="big">Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $act->name; ?>">
		</div>
		<div class="form-group">
			<label class="big">Description</label>
			<textarea class="form-control" name="description"><?php echo $act->description; ?></textarea>
		</div>
		<input type="submit" class="btn btn-default btn-lg" value="Save" name="submit">
	</form>
</div>
<?php include 'inc/footer2.php'; ?>