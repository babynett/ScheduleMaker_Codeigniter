<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--BOOTSTRAP LINKS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>COR File | Upload</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">

    <!--STYLES-->
    <style>
        body {
			margin:  0;
			font-family: Poppins;
			font-weight: 100px;
		}
		.page-content {
			width: 100%;
			height: 100vh;
			margin:  0 auto;
			background: linear-gradient(#143021, #7d8547);
			display: flex;
			display: -webkit-flex;
			justify-content: center;
			-o-justify-content: center;
			-ms-justify-content: center;
			-moz-justify-content: center;
			-webkit-justify-content: center;
			align-items: center;
			-o-align-items: center;
			-ms-align-items: center;
			-moz-align-items: center;
			-webkit-align-items: center;
		}
		.form-v6-content  {
			background: #fff;
			width: 968px;
			border-radius: 8px;
			-o-border-radius: 8px;
			-ms-border-radius: 8px;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			margin: 180px 0;
			font-family: 'Nunito', sans-serif;
			color: #fff;
			font-weight: 700;
			position: relative;
			display: flex;
			display: -webkit-flex;
		}
		.form-v6-content .form-left {
			margin-bottom: -6px;
		}
		.form-v6-content .form-left img {
			border-top-left-radius: 8px;
			border-bottom-left-radius: 8px;
		}
		.form-v6-content .form-detail {
			padding: 30px 40px;
			position: relative;
			width: 100%;
		}
		.form-v6-content .form-detail h2 {
			color: #333;
			font-size: 35px;
			text-align: center;
			position: relative;
			padding: 6px 0 0;
			margin-bottom: 47px;
		}
		.form-v6-content .form-row {
			width: 100%;
		}
		.form-v6-content .form-detail .form-row-last {
			text-align: center;
		}
		.form-v6-content .form-detail .input-text {
			margin-bottom: 35px;
		}
		.form-v6-content .form-detail input {
			width: 92%;
			padding: 0px 15px 10px 15px;
			border: 2px solid transparent;
			border-bottom: 2px solid #e5e5e5;
			appearance: unset;
			-moz-appearance: unset;
			-webkit-appearance: unset;
			-o-appearance: unset;
			-ms-appearance: unset;
			outline: none;
			-moz-outline: none;
			-webkit-outline: none;
			-o-outline: none;
			-ms-outline: none;
			font-family: 'Nunito', sans-serif;
			font-size: 16px;
			font-weight: 700;
			color: #333;
		}
		.form-v6-content .form-detail .form-row input:focus {
			border-bottom: 2px solid #fe892a;
		}
		.form-v6-content .form-detail .register {
			background: #fe892a;
			border-radius: 6px;
			-o-border-radius: 6px;
			-ms-border-radius: 6px;
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px;
			width: 160px;
			box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
			-o-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
			-ms-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
			-moz-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
			-webkit-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
			border: none;
			margin: 11px 0 50px 0px;
			cursor: pointer;
			font-family: 'Nunito', sans-serif;
			color: #fff;
			font-weight: 700;
			font-size: 18px;
		}
		.form-v6-content .form-detail .register:hover {
			background: #e37b27;
		}
		.form-v6-content .form-detail .form-row-last input {
			padding: 13px;
		}
		input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
		color: #666;
		font-size: 16px;
		}
		input::-moz-placeholder { /* Firefox 19+ */
		color: #666;
		font-size: 16px;
		}
		input:-ms-input-placeholder { /* IE 10+ */
		color: #666;
		font-size: 16px;
		}
		input:-moz-placeholder { /* Firefox 18- */
		color: #666;
		font-size: 16px;
		}

		/* Responsive */
		@media screen and (max-width: 991px) {
			.form-v6-content {
				margin: 180px 20px;
				flex-direction:  column;
				-o-flex-direction:  column;
				-ms-flex-direction:  column;
				-moz-flex-direction:  column;
				-webkit-flex-direction:  column;
			}
			.form-v6-content .form-left {
				width: 100%;
			}
			.form-v6-content .form-left img {
				width: 100%;
				border-bottom-left-radius: 0px;
				border-top-right-radius: 8px;
			}
			.form-v6-content .form-detail {
				padding: 30px 20px 30px 20px;
				width: auto;
			}
			.form-v6-content .form-detail .form-row input {
				width: 96%;
			}
			.register {
				margin: 0 auto;
			}
		}
		@media screen and (max-width: 767px) {
			.form-v6-content .form-detail .form-row input {
				width: 94%;
			}
		}

		@media screen and (max-width: 575px) {
			.form-v6-content .form-detail .form-row input {
				width: 89%;
			}
		}

    </style>
</head>
<body class="form-v6">
<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img src="application\views\assets\cor_sample.jpg" height="550px" alt="form">
			</div>
			<form class="form-detail" action="<?= base_url('save') ?>" method="post" enctype="multipart/form-data">
				<h2>Submit your COR</h2>
                <div class="form-row">
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Full Name" required>
                    <?php echo form_error('full-name');?>
				</div>
				<div class="form-row">
					<input type="text" name="school_univ" id="school_univ" class="input-text" placeholder="School/University" required>
                    <?php echo form_error('school_univ');?>
				</div>
				<div class="form-row">
					<input type="text" name="year-lvl" id="year-lvl" class="input-text" placeholder="Year Level">
                    <?php echo form_error('year-lvl');?>
				</div>
				<div class="form-row">
					<input type="text" name="course" id="course" class="input-text" placeholder="Course" required>
                    <?php echo form_error('course');?>
				</div>
				<div class="form-row">
					<input type="file" name="cor_file" id="cor_file" class="COR File" required>
                    <small><?php if(isset($error)) {echo $error;} ?></small>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Submit">
				</div>
			</form>
		</div>
	</div>
</body>
</html>