<?php include 'inc/header.php'; ?>
</div>
<br><br>
      <div class="jumbotron jumbotron-main j-main">
		<h1>Escapade</h1>
        <p class="lead">Come on baby, let's get away.</p>
      </div>
	  <br><br>

	<div class="container">
		<div class="row">

			<div class="col-md-4 box">
				<div class="well">
					<span class="glyphicon glyphicon-heart"></span>
					<h3>Let's go out.</h3>
					<p>Planning date night just got a whole lot easier. Never again spend hours in search of where you should go.</p>
				</div>
			</div>
			
	
			<div class="col-md-4 box">
				<div class="well">
					<span class="glyphicon glyphicon-plane"></span>
					<h3>Where to?</h3>
					<p>Start planning your next dream vacation with your loved one. Two heads are better than one!</p>
				</div>
			</div>

			<div class="col-md-4 box">
				<div class="well">
					<span class="glyphicon glyphicon-map-marker"></span>
					<h3>"So there's this place..."</h3>
					<p>Found somewhere new and exciting that you want to share with your love? Post it!</p>
				</div>
			</div>

		</div>
	</div>
	  
	<br><br>  
	  <div class="section-a">
		<div class="row">
			<div class="col-md-12">
				<h1>Don't keep them waiting.</h1>
				<p>Check out what's in the works, or start planning now.</p>
			</div>
		</div>
	  </div>
	  
	  <br><br>
	  <div class="container">
	  <div class="row">
	  <div class="col-md-2"></div>
	  <div class="col-md-8">
	  <a class="j-link" href="dates.php">
		<div class="jumbotron j-date"> 
        <h1>Dates</h1>
		</div>
	</a>
		
      	<?php foreach($dates as $date): ?>
      	<div class="row marketing">

	        <div class="col-md-12">
			<h2>Latest Date</h2> <hr>
	          <h4><?php echo $date->name;?> - <?php echo $date->location;?>  <a class="btn btn-default btn-lg right" href="date.php?id=<?php echo $date->id; ?>">View</a></h4>
			<br>	  
	        </div>
        </div>  
        <?php endforeach; ?> 
	  <div class="col-md-2"></div>
	</div>
	</div>
	<br><br><br>
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<a class="j-link" href="trips.php">
			<div class="jumbotron j-trip">
			<h1>Trips</h1>
			</div>
			</a>
      	<?php foreach($trips as $trip): ?>
      	<div class="row marketing">
		
	        <div class="col-md-12">
			<h2>Latest Trip</h2> <hr>
	          <h4><?php echo $trip->name;?> - <?php echo $trip->location;?>  <a class="btn btn-default btn-lg right" href="trip.php?id=<?php echo $trip->id; ?>">View</a></h4>
	          
			  <br>
	        </div>
        </div>  
        <?php endforeach; ?> 
	<div class="col-md-2"></div>
	</div>
	</div>
</div> <!-- container -->
 
<?php include 'inc/footer.php'; ?>