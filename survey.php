<?php
	include("../../../php/utils.php");

	// loading question types
		foreach (glob("questionTypes/*.php") as $filename)
		{
		    include $filename;
		}

	//
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" media="all"/>
	  	<link href="../../../css/styles.css" rel="stylesheet" media="screen">
 		<script src="../../../js/jquery-1.10.2.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<title>Ferrell and Hally Study</title>
	</head>
	<body>
		<div class="container">
			<div id="navigationBar"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="page-header img-rounded">
						<h1>Ferrell and Hally Study</h1>
					</div>
				</div>
			</div>
			<a href="finalthankyou.html">Final debriefing page</a>
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>
		</div>
	</body>
</html>
