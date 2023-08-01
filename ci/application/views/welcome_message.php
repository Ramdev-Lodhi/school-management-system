<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<style>
	/* body {
		background-color: powderblue;
		font-size: 20px;
	} */

	form {
		/* height: 500px auto; */
		width: 40%;
		/* margin: 50px auto; */
		text-align: left;
		padding: 2%;
		border: 2px solid #bbbbbb;
		border-radius: 5px;
		background-color: lightyellow;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
		
		margin-left: 30%;
	}

	.input-group {
		margin: 30px 30px 30px 30px;
	}

	.input-group input {
		height: 40px;
		width: 93%;
		padding: 5px 10px;
		font-size: 23px;
		border-radius: 10px;
		border: 2px solid gray;
	}

	.input-group2 input {
		height: 30px;
		width: 53%;
		padding: 5px 15px;
		font-size: 20px;
		border-radius: 10px;
		border: 2px solid gray;
	}
</style>

<body>

	<div id="page-wrapper">

		<div class="form-three widget-shadow">

			<div class=" panel-body-inputin">
				<div class="form-group mb-n">
					<form class="form-horizontal" action="http://localhost/ci/index.php/Welcome/insert/" method="POST">


						<h1 align="center">Registration Form </h1>


						<div class="container">

							<div class="input-group">
								<label>First name</label>
								<input type="text" name="fname" value="" required>

							</div>
							<div class="input-group">
								<label>Last name</label>
								<input type="text" name="lname" value="" required>

							</div>
							<div class="input-group">
								<label>Date of Brith</label>
								<input type="Date" name="dob" required>

							</div>


							<div class="input-group">
								<label>Phone</label>
								<input type="text" name="phone" value="" required|max-lenght=10>

							</div>
							<div class="input-group">
								<label>Gender</label>
								<select name="gender" required>
									<option value="not select">select</option>
									<option value="male">male</option>
									<option value="female">female</option>
								</select>

							</div>
							<div class="input-group">
								<label>Occupation</label>
								<select name="occupation" required>
									<option value="not select">select</option>
									<option value="student">student</option>
									<option value="pjob">Private Job</option>
									<option value="gjob">Govt. Job</option>
									<option value="farmer">Farmer</option>
								</select>

							</div>
							<div class="input-group">
								<label>Qualification</label>
								<select name="qualification" required>
									<option value="not select">select</option>
									<option value="10th">10th</option>
									<option value="12th">12th</option>
									<option value="Under Graduate">Under Graduate</option>
									<option value="Post Graduate">Post Graduate</option>
								</select>

							</div>
							<div class="input-group">
								<label>Local Address</label>
								<input type="text" name="laddress" value="" required>

							</div>
							<div class="input-group">
								<label>Permanent Address</label>
								<input type="text" name="paddress" value="" required>

							</div>
							<div class="input-group">
								<label>Pincode</label>
								<input type="number" name="pincode" value="" required>

							</div>

							<div class="input-group">
								<button class="btn btn-primary" type="submit" name="submit">Submit</button>
							</div>
						</div>


					</form>
				</div>
			</div>
		</div>

	</div>

	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
		integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
		crossorigin="anonymous"></script>
</body>

</html>