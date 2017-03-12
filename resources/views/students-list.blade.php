<!DOCTYPE html>
<html>
<head>
	<title>LVCC | Students Registrations</title>
	<link rel="icon" href="{{URL::asset('images/logo_lvcc.png.ico')}}">
	<style type="text/css">
		body {
			margin: 0;
			background-image: url("{{URL::asset('images/bg.png')}}");
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
			width: 1100px;
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

		#link {
			display: inline-block;
			background-color: #127CBB;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			letter-spacing: 0.3px;
			text-align: center;
			width: 100px;
			margin-top: 10px;
			padding: 4px 15px;
		}

		#link:hover{
			background-color: #2196f3;			
		}

		#link a {
			font-size: 15px;
			color: #fff;
			text-decoration: none;
			font-weight: bolder;
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
				<img src="{{ URL::asset('images/lvcc_logo.png') }}">
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
			@foreach($students as $student)
				<tr>
					<td>{{ $student->studNumber }}</td>
					<td>{{ $student->studName }}</td>
					<td>{{ $student->course }}</td>
					<td>{{ $student->year }}</td>
					<td>{{ $student->address }}</td>
					<td id="manage">
						<div id="delete">
							<a href="/delete-student/{{ $student->id }}">
								Delete
							</a>
						</div>
						<div id="edit">					
							<a href="/edit-student/{{ $student->id }}">
								Edit
							</a>
						</div>
					</td>					
				</tr>
			@endforeach
			</tbody>
		</table>
		<div id="link">
			<a href="/add-students"> Add Student </a>
		</div>

	</section>
</body>
</html>