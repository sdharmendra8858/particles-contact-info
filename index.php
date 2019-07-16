<?php

//connect database
include './php/connect.php';

//create tables
include "./php/createTable.php";

if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["mobile"])){
    $mobile = $_POST["mobile"];
}

$errorName = $errorMobile = $message = $run =  "";

if(isset($_POST["loginSubmit"])){

	if(empty($name)){
		$errorName = "*cannot be empty";
	}
	if(empty($mobile)){
		$errorMobile = "*cannot be empty";
	}

	$insert = "INSERT INTO connect_info (name, mobile) VALUES ('$name', $mobile);";

	$run = mysqli_query($conn, $insert);

	if($run){
		$message = "Data Saved";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>HugoTech</title>
	<link rel="stylesheet" href='./css/main.css'>
	<link rel="icon" href="./img/HugoTech.jpg" type="image/jpg" sizes="16x16">

	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body id="particles-js">

	<nav class="navbar navbar-fixed-top" >
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="./img/0.png" alt="HugoTech" height="40px"></a>
			</div>
		</div>
	</nav>


	<div id="login">
	<h3>Contact</h3>
		<form method="POST" action="" id="formSubmit"> 

			<div id="message">
				<?php echo $message ?>
			</div>

			<div>
				<label for="Name">Name</label>
				<br>
				<input type="text" style="margin-bottom:0px" name="name" placeholder="Name">
				<p class="text-danger"><?php echo $errorName; ?></p>
			</div>
			
			<div>
				<label for="mobileNumber">Mobile Number</label>
				<br>
				<input type="text" name="mobile" style="margin-bottom:0px" placeholder="Mobile number">
				<p class="text-danger" ><?php echo $errorMobile; ?></p>
			</div>
			<button type="submit" name = "loginSubmit">Submit</button>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
	
	<script>
		particlesJS.load('particles-js','./json/particles.json',function(){
			console.log('particles.json loaded...');
		})
	</script>
	<?php
	if($run){
	echo '<script>
		document.querySelector("#message").style.display = "block";
		var e = document.querySelector("#message");
		console.log(e)

		setTimeout(()=>{
			document.getElementById("message").style.display = "none";
		},3000)

	</script>';
	}
	?>
</body>
</html>