<!--
# About me
Not a developer in real life but like to write some code sometimes.
Say hello at loic.j.julien@gmail.com
-->
<?php require 'php/app.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>URL Checker</title>
	<meta charset="utf-8">
	
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
	<!-- Bootstrap CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- Custom CSS -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="css/app.css">
</head>

<body>

	<!-- Container ======================================================== -->

	<div class="container">
		<h1>URL Checker</h1>
		<h2 class="subtitle">Check URL status in batch in one click</h2>
		
		<table id="table-results">
			<thead>
				<th class="col-xs-3">URL</th><th class="col-xs-1">Status</th>
			</thead>
			<tbody>
				<?php
					$data = explode("\n", $_POST['urlList']) ; 
					scan_url($data)
				?>
			</tbody>
		</table>

		<a href="index.php"><button class="btn" id="back">New check</button></a>

	</div>

	<!-- Container - End ======================================================== -->

	<!-- JS -->
	<script src="js/app.js"></script>

</body>
</html>