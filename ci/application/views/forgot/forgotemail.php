<?php 
// print_r($data);
// die();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" /> -->
    <title>Document</title>
</head>
<style>
 /* body {
  background-color:powderblue;
    font-size: 20px;
 }
 .container
 {
  height: 100px auto;
    width: 40%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 2px solid #bbbbbb; 
    border-radius: 5px;
	background-color:lightyellow;
	box-shadow: 0px 0px 10px rgba(0,0,0, 0.2);
 } */
 body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
  margin:0;
  padding:0;
}

.bg-img {
  /* The image used */
  background-image: url(<?php echo base_url('images/l8.jpg');?>);

  /* Control the height of the image */
  height: 100%;
/* width: 100px; */
  /* Center and scale the image nicely */
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
  @media(max-width:480px){ 
	.logo{
		width:90%;
	}
}
@media(max-width:480px){ 
	.logo{
		width:auto;
	}
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 20%;
  margin-top: 9% ;
  margin-right: 35%;
  max-width: 35%;
  padding: 2%;
  /* background-color: lightskyblue; */
  border: solid lightslategray;
  box-shadow: 0px 0px 10px rgba(0,0,0, 0.2);
  /* -webkit-text-fill-color: lightgoldenrodyellow; */
}

/* Full-width input fields */
  input[type=email], input[type=password] {
  width: 90%;
  padding: 2%;
  margin: 5px 0 22px 0;
  border: none;
  background: lightgrey;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  width:50%;
  opacity: 0.9;
  font-size: 1em;
}

.btn:hover {
  opacity: 1;
}
</style>
<body>
    <div class="bg-img">
<form method='POST' action='<?php echo base_url('Welcome/forgot/'); ?>'>
    <div class='container'>
    <h1 align="center" style="color: black">forgot password </h1>
    <div class="mb-3">
    <label for="username" class="form-label"style="color: black; font-size:1.5em;" >Email</label>
    <input type="email" class="form-control" name='email' value='' id="username" required
    >
  </div>
  <button type="submit" class="btn btn-primary">Submit&nbsp</button>
</div>
<?php //echo validation_errors();?>
</form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>