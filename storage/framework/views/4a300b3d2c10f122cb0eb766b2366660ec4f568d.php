<!DOCTYPE html>
<html>
<head>
	<title>Registered Students</title>
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

		section {
			width: 900px;
			margin: 0 auto;
			margin-top: 30px; 
			margin-bottom: 50px;
			padding: 25px;
			background-color: #fff;
			border: solid 3px #ccc;
		}


		table {
			padding: 5px 20px;
			width: 100%;
			background-color: #eee;
			border: solid 1px #ccc;
		}

		thead {
			margin: 0;
			font-weight: bold;
			text-transform: uppercase;
			color: #666666;
		}

		tbody {
			margin: 0;
			padding: 0;
		}

		td {
			margin: 0;
			padding: 5px 10px;
		}

		#manage {
			margin: 0;
			width: 150px;
		}

		form {
			display: inline-block;
			margin-top: 20px;
			margin-right: 20px;
		}

		button {
			color: #fff;
			background-color: #127CBB;
			border: none;
			border-radius: 5px;
			padding: 5px 20px;
			cursor: pointer;
			font-size: 15px;
			font-weight: 600;
		}

		#edit, #delete {
			margin: 0 5px;
			display: inline-block;
			background-color: #f44336;
			padding: 3px 15px;
			border-radius: 10px;
			float: right;
		}

		#delete:hover {
			background-color: #d50000;			
		}

		#edit {
			background-color: #5cb85c;
		}

		#edit:hover{
			background-color: #009900;			
		}

		#edit a, #delete a {
			text-decoration: none;
			color: #fff;
			font-weight: bolder;
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
	<section>
		<table>
			<thead>
				<tr>
					<td>Student Number</td>
					<td>Name</td>
					<td>Course</td>
					<td>Year</td>
					<td>Address</td>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($student->studNumber); ?></td>
					<td><?php echo e($student->studName); ?></td>
					<td><?php echo e($student->course); ?></td>
					<td><?php echo e($student->year); ?></td>
					<td><?php echo e($student->address); ?></td>
					<td id="manage">
						<div id="delete">
							<a href="/delete-student/<?php echo e($student->id); ?>">
								Delete
							</a>
						</div>
						<div id="edit">					
							<a href="/edit-student/<?php echo e($student->id); ?>">
								Edit
							</a>
						</div>
					</td>					
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
			<form method="post" action="/add-students">
				<?php echo e(csrf_field()); ?>

				<button type="submit"> Add Student </button>
			</form>
	</section>
</body>
</html>