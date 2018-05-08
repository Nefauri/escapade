<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Edit Place</h2>
	<form method="post" action="edit-place.php?id=<?php echo $place->id; ?>">

		<div class="form-group">
			<label class="big">Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo $place->name; ?>">
		</div>
		<div class="form-group">
			<label class="big">Notes</label>
			<textarea class="form-control" name="notes"><?php echo $place->notes; ?></textarea>
		</div>
		
		<select class="form-control" name="place_type_id">
				<option value="0">Choose Type</option>
                <?php foreach($place_types as $pt): ?>
                	<?php if($place->place_type_id == $pt->id) : ?>
                		<option value="<?php echo $pt->id; ?>" selected><?php echo $pt->name; ?></option>
					<?php else: ?>
						<option value="<?php echo $pt->id; ?>"><?php echo $pt->name; ?></option>
					<?php endif; ?>          
                <?php endforeach; ?>
			</select>
		<br><br>
		<input type="submit" class="btn btn-default btn-lg" value="Save" name="submit">
	</form>
	<br><br>
	</div>
<?php include 'inc/footer2.php'; ?>