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


		<form method="post" action="">
			<textarea id="urlList" name="urlList" cols="60" rows="5">http://stackoverflow.com/questions/13515496/how-to-get-id-of-submit-type-button-when-button-is-pressed-php-html
https://forum.alsacreations.com/topic-20-32760-1-Resolu-Lignes-textarea-gt-array.html</textarea>
			<br>
			<input id="checkMyUrl" type="submit" value="Check My URL" class="btn" />
		</form>

	</div>

	<!-- Container - End ======================================================== -->

	<!-- JS -->
	<script src="js/app.js"></script>

</body>
</html>