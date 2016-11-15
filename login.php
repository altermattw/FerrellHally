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
						Login
					</div>
					<form name="logForm" id="logForm" role="form" action="login.php" method="post">
						<div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control login" id="email" name="email" placeholder="Enter email">
					  </div>

				    <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control login" id="password" name="password" placeholder="Password">
					  </div>
					  <div id="passWarn" hidden><small>Password is fewer than 7 characters.</small></div>
					  <div><p><small>If you&rsquo;ve forgotten your password, <a id="reset" href="resetPassword.html">click here</a></small></p></div>
					  <div class="row">
							<div class="text-center">
								<button type="submit" id="submit" class="btn btn-primary">Continue</button>
							</div>
						</div>
					</form>
				</div>
			</div>
