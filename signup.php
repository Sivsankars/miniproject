<?php 

	include("classes/connect.php");
	include("classes/signup.php");

	$first_name = "";
	$last_name = "";
	$gender = "";
	$email = "";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{


		$signup = new Signup();
		$result = $signup->evaluate($_POST);
		
		if($result != "")
		{

			echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";
		}else
		{

			header("Location:" . ROOT ."login");
			die;
		}
 

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		

	}


	

?>

<html> 

	<head>
		
		<title>OGMA | Signup</title>
	</head>

	<style>
		
		#bar{
			height:100px;
			background-color: rgb(59,89,152);
			color: #d9dfeb;
			padding: 4px;
		}

		#signup_button{

			text-align: center;
			width: 10%;
    		border: 1px solid #8B0000;
    		margin: 35px 0 10px;
    		height: 32px;
    		font-size: 12px;
    		border-radius: 20px;
    		padding: 0 10px;
    		box-sizing: border-box;
    		outline: none;
			background-color: #9ACD32;
    		color: #fff;
    		cursor: pointer;
			float:right;
		}

		#bar2{

			background-color: white;
			width:800px;
			margin:auto;
			margin-top: 50px;
			padding:10px;
			padding-top: 50px;
			text-align: center;
			font-weight: bold;

		}

		#text{

			width: 40%;
    		border:1px solid #8B0000;
    		margin: 6px 0;
    		height: 32px;
    		border-radius: 20px;
    		padding: 0 10px;
    		box-sizing: border-box;
    		outline: none;
			text-align: center;
    		color: #800080;
		}

		#button{

			width: 30%;
    		border: 1px solid #8B0000;
    		margin: 35px 0 10px;
    		height: 32px;
    		font-size: 12px;
    		border-radius: 20px;
    		padding: 0 10px;
    		box-sizing: border-box;
    		outline: none;
			background-color: #87CEFA;
    		color: #fff;
    		cursor: pointer;
		}
		
		#threeD {
  			color: darkgrey;
  			white-space: nowrap;
  			position: absolute;
  			left: 50%;
  			transform: translate(-50%, -50%);
  			font-size: 40px;
  			font-family: sans-serif;
  			letter-spacing: 0.1em;
  			transition: 0.3s;
  			text-shadow: 1px 1px 0 grey, 1px 2px 0 grey, 1px 3px 0 grey, 1px 4px 0 grey,
    		1px 5px 0 grey, 1px 6px 0 grey, 1px 7px 0 grey, 1px 8px 0 grey,
    		5px 13px 15px black;
		}

		#threeD:hover {
  			transition: 0.3s;
  			transform: scale(1.1)translate(-50%, -50%);
  			text-shadow: 1px -1px 0 grey, 1px -2px 0 grey, 1px -3px 0 grey,
    		1px -4px 0 grey, 1px -5px 0 grey, 1px -6px 0 grey, 1px -7px 0 grey,
    		1px -8px 0 grey, 5px -13px 15px black, 5px -13px 25px #808080;
		}

	</style>

	<body style="font-family: tahoma;background-color: #e9ebee;">
		
		<div id="bar">
			<a href="login.php">
			<div id="signup_button">Log in</div>
			</a>
		</div>

		<div id="bar2">
			
			<div id="threeD">Sign up</div><br><br>

			<form method="post" action="">

				<input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First name"><br><br>
				<input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last name"><br><br>

				<span style="font-weight: normal;">Gender:</span><br>
				<select id="text" name="gender">
					
					<option><?php echo $gender ?></option>
					<option>Male</option>
					<option>Female</option>

				</select>
				<br><br>
				<input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email"><br><br>
				
				<input name="password" type="password" id="text" placeholder="Password"><br><br>
				<input name="password2" type="password" id="text" placeholder="Retype Password"><br><br>

				<input type="submit" id="button" value="Sign up">
				<br><br><br>

			</form>

		</div>

	</body>


</html>