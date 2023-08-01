<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<style>
	body {
	background-color:mistyrose	;
    font-size: 20px;
}
form {
	height: 100px auto;
    width: 40%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 2px solid #bbbbbb; 
    border-radius: 5px;
	background-color:whitesmoke;
	box-shadow: 0px 0px 10px rgba(0,0,0, 0.2);
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
    
    <form action="<?php echo base_url().'Welcome/forgot/'.$data->id; ?>" method="POST">
	<h1  align="center">Registration Form </h1>
    
     
	<div class="container">
	<table>
	 <div class="input-group">
			<label>Full name</label>
			<input type="text" name="fname" value="<?php echo $data->fname?>" required>
	
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="" required>
	
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" value="">	
		</div>
	
		<div class="input-group">
			<button class="btn btn-primary" type="submit" name="submit" >Submit</button>
		</div>
     </div>
 </form>
</table>
    
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>    
</body>
</html> -->