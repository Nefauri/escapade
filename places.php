<?php include_once 'config/init.php'; ?>

<?php

$place = new Places;

if(isset($_POST['del_id'])){
	$del_id = $_POST['del_id'];
	if($place->delete($del_id)){
		redirect('places.php', 'Place removed.', 'success');
	} else {
		redirect('places.php', 'Something went wrong!', 'error');
	}
}


?>


<?php include 'templates/inc/header.php'; ?>

<br><br>
<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="jumbotron j-places">
				<h1>Places to Go</h1>
			</div>
		<div class="col-md-2"></div>
</div>
</div>

<div class="middle">
	<a class="btn btn-default btn-lg" href="create-place.php">Add Place</a>
</div>

		<br><h2>Dining</h2><hr><br>
		<?php 
		
		$dining = new Places;
		$d = $dining->getAllDining();	
		
		
		foreach($d as $dining): ?>
      	<div class="row marketing poi">
	        <div class="col-md-10">
	          <h3><?php echo $dining->name; ?></h3>
	          <h4 class="indent"><?php echo $dining->notes; ?></h4>     
	        </div>
	        <div class="col-md-2">
			<br>
	        		<a class="btn btn-default" href="edit-place.php?id=<?php echo $dining->id; ?>">Edit</a>
					<form style="display:inline;" method="post" action="places.php">
						<input type="hidden" name="del_id" value="<?php echo $dining->id; ?>">
						<input type="submit" class="btn btn-danger" value="Delete">
					</form>
	        </div>
        </div>  
        <?php endforeach; ?> 
		<br>
		<br><h2>Recreation</h2><hr><br>
		<?php 
		
		$rec = new Places;
		$r = $rec->getAllRecreation();	
		
		
		foreach($r as $rec): ?>
      	<div class="row marketing poi">
	        <div class="col-md-10">
	          <h3><?php echo $rec->name; ?></h3>
	          <h4 class="indent"><?php echo $rec->notes; ?></h4>     
	        </div>
	        <div class="col-md-2">
			<br>
	        		<a class="btn btn-default" href="edit-place.php?id=<?php echo $rec->id; ?>">Edit</a>
					<form style="display:inline;" method="post" action="places.php">
						<input type="hidden" name="del_id" value="<?php echo $rec->id; ?>">
						<input type="submit" class="btn btn-danger" value="Delete">
					</form>
					
	        </div>
        </div>  
        <?php endforeach; ?> 
			<br>
				<br><h2>Points of Interest</h2><hr><br>
		<?php 
		
		$poi = new Places;
		$p = $poi->getAllPoi();	
		
		
		foreach($p as $poi): ?>
      	<div class="row marketing poi">
	        <div class="col-md-10">
	          <h3><?php echo $poi->name; ?></h3>
	          <h4 class="indent"><?php echo $poi->notes; ?></h4>     
	        </div>
			<br>
	        <div class="col-md-2">
	        		<a class="btn btn-default" href="edit-place.php?id=<?php echo $poi->id; ?>">Edit</a>
					<form style="display:inline;" method="post" action="places.php">
					
						<input type="hidden" name="del_id" value="<?php echo $poi->id; ?>">
						<input type="submit" class="btn btn-danger" value="Delete">
					</form>
					
	        </div>
        </div>  
        <?php endforeach; ?> 

		
		</div>

<?php include 'templates/inc/footer.php'; ?>