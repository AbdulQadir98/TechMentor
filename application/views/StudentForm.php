<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<title>TechMentor</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
	
		<!-- Loading custom css files -->
		<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/form.css'?>">

	</head>

	<body>

	  <div class="box">
		<h2>Student Form</h2>
		<p>Enter details</p>

			<form action="<?php echo BASEURL.'/Student/submit';?>" method="get">
				<div class="inputBox">
					<input type="text" id="firstname" name="firstname">
					<label for="firstname">First Name</label>
				</div>
				
				<div class="inputBox">
					<input type="text" id="lastname" name="lastname">
					<label for="lastname">Last Name</label>
				</div>
				
				<input type="submit" name="submit" value="Submit">
			</form>
	
	  </div>
	</body>

</html>