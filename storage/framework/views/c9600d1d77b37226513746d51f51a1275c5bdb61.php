<!DOCTYPE html>
<html>
<head>
	<title> Student Registrations </title>
	<style type="text/css">
		body {
			margin: 0;
			background-image: url("<?php echo e(URL::asset('bg.png')); ?>");
			font-family: calibri;
		}

		header {
			background-color: #127CBB;
			height: 140px;
			text-shadow: 1px 3px 6px #000;
			margin-bottom: 5px;
			padding: 0 20%;
			border-bottom: solid 5px #999;
		}

		#lvcc_logo {
			padding: 15px 25px;
			margin: 0;
			display: block;
		}

		#lvcc_logo img {
			height: 110px;
			float: left;
		}

		.lvcc{
			float: left;
			padding: 0;
			margin-top: 10px;
			margin-left: 30px; 
			font-family: tolkien;
			font-size: 50px;
			color: #fff;
		}
	</style>
</head>
<body>

		<header>
			<div id="lvcc_logo">
				<img src="<?php echo e(URL::asset('lvcc_logo.png')); ?>">
			</div>
			<div class="lvcc"> La Verdad Christian College</div>
		</header>

</body>
</html>