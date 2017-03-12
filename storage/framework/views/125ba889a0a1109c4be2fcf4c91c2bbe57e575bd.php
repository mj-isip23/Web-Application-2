<!DOCTYPE html>
<html>
<head>
	<title>Students Registrations</title>
	<style type="text/css">
		body {
			margin: 0;
			background-image: url("<?php echo e(URL::asset('images/bg.png')); ?>");
			font-family: calibri;
		}

		header {
			background-color: #127CBB;
			height: 160px;
			text-shadow: 1px 3px 6px #000;
			border: solid 1px #ccc;
		}

		#lvcc_logo {
			padding: 20px;
			margin: 0;
			display: block;
			position: relative;
		}

		#lvcc_logo img {
			height: 120px;
			float: left;
		}

		#lvcc{
			float: left;
			padding: 0;
			margin-left: 20px; 
			font-family: tolkien;
			font-size: 35px;
			color: #fff;
		}

		#lvcc span {
			font-size: 45px;
		}

		#title {
			float: right;
			color: #fff;
			font-family: arial;
			font-weight: bold;
			font-size: 20px;
			text-transform: uppercase;
			margin: 10px 35px;
		}

		section {
			width: 600px;
			margin: 0 auto;
			margin-top: 50px; 
			margin-bottom: 50px; 
			padding: 25px;
			background-color: #fff;
			border: solid 3px #ccc;
		}

		form {
			font-weight: bold;
			color: #666666;
			padding: 20px;
			margin-top: 20px;
			background-color: #eee;
			border: solid 1px #ccc;
		}

		input, textarea {
			margin-top: 5px;
			margin-bottom: 10px;
			width: 96%;
			border-radius: 5px;
			border: solid 1px #ccc;
			padding: 7px 10px;
		}

		textarea {
			resize: none;
		}

		button{
			color: #fff;
			background-color: #127CBB;
			border: none;
			border-radius: 5px;
			margin-right: 5px; 
			padding: 5px 20px;
			cursor: pointer;
			font-size: 15px;
			font-weight: 600;
		}

		#see-list {
			display: inline;
			background-color: #47a1d6;
			border-radius: 5px;
			width: 50px;
		}

		#see-list a {
			text-decoration: none;
			color: #fff;
			font-weight: bolder;
			padding: 4px 35px;
		}


	</style>
</head>
<body>

	<section>
		<header>
			<div id="lvcc_logo">
				<img src="<?php echo e(URL::asset('images/lvcc_logo.png')); ?>">
			</div>
			<div id="lvcc"> La Verdad Christian College</div>
			<div id="title"> Student Registration </div>

		</header>
		<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<form method="post" action="/update/<?php echo e($student->id); ?>">
			<?php echo e(csrf_field()); ?>



			Student Number <br>
			<input type="text" name="studNumber" value="<?php echo e($student->studNumber); ?>"> <br>
			Name <br>
			<input type="text" name="studName" value="<?php echo e($student->studName); ?>"> <br>
			Course <br>
			<input type="text" name="course" value="<?php echo e($student->course); ?>"> <br>
			Year <br>
			<input type="number" name="year" min="1" max="5" value="<?php echo e($student->year); ?>"> <br>
			Address <br>
			<textarea name="address" rows="5" cols="50" style="text-align:left !important"><?php echo e($student->address); ?></textarea>


			<button type="submit"> Save </button>

			<a href="">Back</a>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</form>
	</section>
</body>
</html>