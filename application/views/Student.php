<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<title>TechMentor</title>
		<!-- third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
	
		<!-- custom css files -->
	    <link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/table.css'?>">
		<link rel="stylesheet" href="<?php echo BASEURL.'/public/assets/css/homepage.css'?>">

	</head>

	<body>
	  <div class="main">

		<div>
		  <table class="styled-table">       
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
				</tr>
			</thead>
			<tbody>

			  <?php 
				$result=$data['result'];
				foreach ($result as $row): 
			  ?>

				<tr>
				  <td><?php echo $row['firstname'];?></td>
				  <td><?php echo $row['lastname'];?></td>
				</tr>

			  <?php endforeach;?>
			
			</tbody>
		  </table>
		</div>

		<button onclick="window.location.href='<?php echo BASEURL.'/student/add'?>'">Add Student</button>
	
	  </div>
	</body>

</html>