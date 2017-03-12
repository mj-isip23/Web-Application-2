<!DOCTYPE html>
<html>
<head>
	<title> Registered Students </title>
</head>
<body>

		<header>
			<div id="lvcc_logo">
				<img src="lvcc_logo.png">
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
			<?php foreach($students as $student): ?>
				<tr>
					<td><?php echo $student->studNumber ?></td>
					<td><?php echo $student->DB::table('students').get() ?></td>
					<td><?php echo $student->course ?></td>
					<td><?php echo $student->year ?></td>
					<td><?php echo $student->address ?></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</section>

</body>
</html>