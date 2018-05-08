<?php include 'inc/header.php'; ?>
	<h2><?php echo $date->name; ?></h2>
	
	<a href="edit.php?id=<?php echo $date->id; ?>" class="btn btn-default">Edit</a> 

			<form style="display:inline;" method="post" action="date.php">
				<input type="hidden" name="del_id" value="<?php echo $date->id; ?>">
				<input type="submit" class="btn btn-danger" value="Delete">
			</form>
	
	<hr>
	<p class="lead"><?php echo $date->description; ?> </p>
	<ul class="list-group">
		<li class="list-group-item"><strong>Where:</strong> <?php echo $date->location; ?></li>

		<li class="list-group-item"><strong>When:</strong> <?php echo $date->timing; ?></li>
	</ul>
	<br><br>
	<a href="dates.php" class="btn btn-default btn-lg big"><span class="glyphicon glyphicon-arrow-left"></span></a>
	<br><br>

</div>
<?php include 'inc/footer2.php'; ?>