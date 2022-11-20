<?php 

session_start();

	include("classes/connect.php");
	include("classes/login.php");
 
	$email = "";
	$password = "";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{


		$login = new Login();
		$result = $login->evaluate($_POST);
		
		if($result != "")
		{

			echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			echo "<br>The following errors occured:<br><br>";
			echo $result;
			echo "</div>";
		}else
		{

			header("Location: ".ROOT."profile");
			die;
		}
 

		$email = $_POST['email'];
		$password = $_POST['password'];
		

	}


	

?>

<html> 

	<head>
		
		<title>OGMA | Log in</title>
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

			<div style="font-size: 40px;">OGMA</div>
			<a href="<?=ROOT?>signup">
			<div id="signup_button">Signup</div>
			</a>
		</div>

		<div id="bar2">
			
			<form method="post">
			<div id="threeD">Login</div><br><br>

				<input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email"><br><br>
				<input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Password"><br><br>

				<input type="submit" id="button" value="Log in">
				<br><br><br>

			</form>
		</div>

	</body>


</html>