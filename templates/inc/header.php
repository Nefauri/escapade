<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<title>Escapade</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">-->
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	  
	<nav class="navbar">
      <div class="container">
        <div class="navbar-header">
		 
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="index.php">Escapade</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="dates.php">Dates</a></li>
			<li role="presentation"><a href="trips.php">Trips</a></li>
			<li role="presentation"><a href="places.php">Places to Go</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Plan New...<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a class="dd" href="create-date.php">Date</a></li>
					<li><a class="dd" href="create-trip.php">Trip</a></li>
					<li><a class="dd" href="create-place.php">Place to Go</a></li>
				</ul>
			</li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</nav>
	
	<div class="container">

      <?php displayMessage(); ?>