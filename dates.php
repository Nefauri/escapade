<?php include_once 'config/init.php'; ?>
<?php include 'templates/inc/header.php'; ?>

<br><br>
<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="jumbotron j-date">
				<h1>Dates</h1>
			</div>
		<div class="col-md-2"></div>
</div>
</div>
<div class="middle">
	<a class="btn btn-default btn-lg" href="create-date.php">Plan Date</a>
</div>

	<?php $date = new Dates; $dates = $date->getAllDates(); foreach($dates as $date): ?>
      	<div class="row marketing">
	        <div class="col-md-10">
	          <h3><?php echo $date->name; ?></h3>
	          <h4><?php echo $date->description; ?></h4>     
	        </div>
	        <div class="col-md-2">
	        		<a class="btn btn-default btn-lg" href="date.php?id=<?php echo $date->id; ?>">View</a>
				
	        </div>
        </div>  
		<hr>
        <?php endforeach; ?> 

</div>
<?php include 'templates/inc/footer2.php'; ?>