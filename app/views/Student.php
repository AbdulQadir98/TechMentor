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
	    <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>">

	</head>

	<body>
	  <div>
		<h2>Homepage</h2>

		<div>
			<form action="<?php echo BASEURL.'/Student/submit';?>" method="post">
		
				<input type="text" id="firstname" placeholder="first name" name="firstname">
				<label for="firstname">First Name</label>
				<input type="text" id="lastname" placeholder="last name" name="lastname">
				<label for="lastname">Last Name</label>

				<input type="submit" name="submit" value="Submit">
			
			</form>
		</div>

		<!-- <div>
		  <table class="styled-table">       
			<thead>
				<tr>
					<th>Username</th>
				</tr>
				</thead>
			
			<tbody>

			  <?php 
				$result=$data['result'];
				foreach ($result as $row): 
			  ?>

				<tr>
					<td>
						<?php echo $row['firstname'];?>
					</td>
					<td>
						<?php echo $row['lastname'];?>
					</td>
				</tr>

			  <?php endforeach;?>
			
			</tbody>
		  </table>
		</div> -->
	
	  </div>
	</body>

</html>