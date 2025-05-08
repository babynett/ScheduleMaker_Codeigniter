<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Schedule Maker</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
	<style>
		body{
			background-image: url("application/views/assets/backgrounds/welc_bg.jpg");
			background-size: cover;
			background-attachment: fixed;
			font-family: Poppins;
			font-weight: 100px;
		}
		a{
			text-decoration: none;
			color: white;
		}
		button{
			background-color: green;
			border-radius: 5px;
			height: 40px;
			width: 100px;
		}
		.container{
			height: 80vh;
			display: flex;
			justify-content: center;
			vertical-align: top;
		}
		.row{
			width: 80%;
			display: flex;
			justify-content: center;
			vertical-align: top;
		}

		.btn-primary{
			font-size: 20px;
		}
		table thead tr th{
			width: 150px;
			line-height: 70px;
			border: 2px solid rgba(249, 239, 39, 0.5);
			font-size: 24px;
			color: white;
		}
		.del{
			font-size: 18px;
		}
		tr td{
			width: 150px;
			line-height: 50px;
			border: 2px solid rgba(249, 239, 39, 0.5);
			font-size: 18px;
			color: white;
			background: linear-gradient(#143021, #092b11);
			text-align: center;
		}
	</style>
</head>
<body>
<div class="first-container">
	<h1 class="page-header text-center" style="text-align: center; margin: 30px; color: white;">Create Schedule</h1>
	</div>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<button><a href="<?php echo base_url(); ?>index.php/users/addnew" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></button><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Course</th>
						<th>Section</th>
						<th>Subject</th>
						<th>Day/s</th>
						<th>Time In</th>
						<th>Time Out</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($users as $user){
						?>
						<tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->course; ?></td>
							<td><?php echo $user->section; ?></td>
							<td><?php echo $user->subject; ?></td>
							<td><?php echo $user->day; ?></td>
							<td><?php echo $user->i_time; ?></td>
							<td><?php echo $user->o_time; ?></td>
							<td><a href="<?php echo base_url(); ?>index.php/users/edit/<?php echo $user->id; ?>" class="del btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || <a href="<?php echo base_url(); ?>index.php/users/delete/<?php echo $user->id; ?>" class="del btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>