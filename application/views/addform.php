<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Schedule Maker</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">

	<!--STYLES-->
	<style>
		body{
			background: linear-gradient(#143021, #7d8547);
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
		}
		.container{
			height: 78vh;
			display: flex;
			justify-content: center;
			vertical-align: top;
		}

		.btn{
			font-size: 20px;
			width: 100px;
			height: 40px;
		}
		.btn-primary{
			font-size: 20px;
			height: 50px;
		}
		.del{
			font-size: 18px;
		}
		.form-cont{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			gap: 20px;
			margin: 30px;
			padding: 10px auto;
			height: 60vh;
			width: 500px;
		}
		.form-control{
			width: 250px;
			height: 30px;
		}
		
	</style>
</head>
<body>
<div class="first-container">
	<h1 class="page-header text-center" style="text-align: center; margin: 30px; margin-top:80px; color: white;">Create Schedule || Add Form</h1>
	</div>
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
				<button class="btn btn-primary"><span class="pull-right"><a href="<?php echo base_url('save'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span></button>
			
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/insert" class="form-cont">
				<div class="form-group">
					<label>Course:</label>
					<input type="text" class="form-control" name="course">
				</div>
				<div class="form-group">
					<label>Section:</label>
					<input type="text" class="form-control" name="section">
				</div>
				<div class="form-group">
					<label>Subject:</label>
					<input type="text" class="form-control" name="subject">
				</div>
				<div class="form-group">
					<label>Day/s:</label>
					<input type="text" class="form-control" name="day">
				</div>
				<div class="form-group">
					<label>Time In:</label>
					<input type="time" class="form-control" name="i_time">
				</div>
				<div class="form-group">
					<label>Time Out:</label>
					<input type="time" class="form-control" name="o_time">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span><a href="<?php echo base_url('insert') ?>">Save</a></button>
			</form>
		</div>
	</div>
</div>
</body>
</html>