<!DOCTYPE html>
<html>
<head>
	<title>LVCC | Students Registrations</title>
	<link rel="icon" href="{{ URL::asset('images/logo_lvcc.ico') }}">
	<style type="text/css">
		body {
			margin: 0;
			background-image: url("{{URL::asset('images/bg.png')}}");
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

		button:hover {
			background-color: #1976d2;
		}

		#see-list {
			display: inline;
			background-color: #47a1d6;
			border-radius: 5px;
			letter-spacing: 0.3px;
			width: 50px;
		}

		#see-list:hover {
			background-color: #2196f3;
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
				<img src="{{ URL::asset('/images/lvcc_logo.png') }}">
			</div>
			<div id="lvcc"> La Verdad Christian College</div>
			<div id="title"> Student Registration </div>

		</header>
		<form method="post" action="/students">
			{{ csrf_field() }}
			Student Number <br>
			<input type="text" name="studNumber"> <br>
			Name <br>
			<input type="text" name="studName" > <br>
			Course <br>
			<input type="text" name="course"> <br>
			Year <br>
			<input type="number" name="year" min="1" max="5"> <br>
			Address <br>
			<textarea name="address" rows="5" cols="50"></textarea> <br>

			<button type="submit"> Register </button>

			<div id="see-list">
				<a href="/students" id="see-list"> See List</a>
			</div>

		</form>
	</section>
</body>
</html>