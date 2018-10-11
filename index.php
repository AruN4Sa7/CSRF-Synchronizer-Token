<?php
	session_start();
	if(isset($_SESSION["success"]))
	{
		header("location:main.php");
		exit();
	}
	
	if(isset($_POST["username"]) && isset($_POST["password"]))
	{	
		$Username = $_POST["username"];
		$Password = $_POST["password"];
		
		if($Username == "admin" && $Password == "admin123")
		{
			header("location:main.php");
			$_SESSION["success"] = true;
			exit();
		}
		else
		{
			$error = "Login Error!";		
		}
	}
?>

<html>
	<head> 
		<title>
			Login
		</title>
	</head>
	<body style="background-image: url('wallpaper.jpg');color: #000000;">
		<form method="POST">
		<h1>CSRF Synchronizer Tokens</h1>
			
		<?php if(isset($error)){echo $error."<br>";}?>
		<center style="padding-top: 150px; font-size: 20px;">
			Username:<input name="username" type="text"/><br><br>
			Password:<input name="password" type="password"/><br><br>
			<input type="submit" value="Login"/>

			<div class="row" align="center" style="padding-top: 20px;">
                
                    
               
            </div>
			
			</center>	
			
		</form>
	</body>
</html>
