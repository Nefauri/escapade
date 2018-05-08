<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Edit Date</h2>
	<form method="post" action="edit.php?id=<?php echo $d->id; ?>">
		<div class="form-group">
			<label>Category</label>

		</div>
		<div class="form-group">
			<label class="big">Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $d->name; ?>">
		</div>
		<div class="form-group">
			<label class="big">Description</label>
			<textarea class="form-control" name="description"><?php echo $d->description; ?></textarea>
		</div>
		<div class="form-group">
			<label class="big">Location</label>
			<input type="text" class="form-control" name="location" value="<?php echo $d->location; ?>">
		</div>
		<div class="form-group">
			<label class="big">When</label>
			<input type="text" class="form-control" name="timing" value="<?php echo $d->timing; ?>">
		</div>
		<input type="submit" class="btn btn-default btn-lg" value="Save" name="submit">
	</form>
</div>
<?php include 'inc/footer2.php'; ?>