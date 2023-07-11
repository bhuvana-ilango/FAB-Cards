<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<style>
		body {
			background-color: rgba(22,34,57,0.95);
			font-family: Arial, sans-serif;
		}
		form {
			background-color: #fff;
			padding: 30px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px #ccc;
			max-width: 600px;
			margin: 0 auto;
		}
		input[type=text], input[type=email], textarea {
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 10px;
			width: 100%;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}
		input[type=submit]:hover {
			background-color: #3e8e41;
		}
		label {
			display: block;
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
<br></br>
<br></br>
<br></br>

<div class="modal-body">
	<form class="row g-3" action="publish.php" method="POST">
		<div class="col-auto">
		<input type="text" class="form-control" id="inputPassword2" placeholder="Deck Name" name="d_id" value="<?php echo $_GET['d_id'] ?>" hidden>
		<label for="deckname" class="visually-hidden">CLASS</label>
		<input type="text" class="form-control" id="inputPassword2" placeholder="1-12" name="class">
		<br></br>

		<label for="deckname" >SUBJECT</label>
		<select id="inputPassword2" name="sub">
			<option value="1">Mathematics</option>
			<option value="2">Science</option>
			<option value="3">English</option>
			<option value="4">History</option>
			<option value="5">Geography</option>
			<option value="6">Computer Science</option>
			<option value="7">Zoology</option>
			<option value="8">Botony</option>
			<option value="9">Physics</option>
			<option value="10">Chemistry</option>
		</select>
		<br></br>
		<label for="deckname" > <span class="space">Easy difficult Hard </span></label><br>
		<span class="pad">
		<input type="range" class="col-9"  id="inputPassword2" min="1" max="3" placeholder="difficulty" name="level">
		</span>
		<br>
		</div>
		<br></br>

		<div class="col-auto">
		<button type="submit" class="btn btn-primary mb-3">Add</button>
		</div>
	</form>
	</div>

</body>
</html>
