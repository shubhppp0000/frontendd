<!DOCTYPE html>

<html>

	<head>/*
		<style type="text/css">
			/*input{background-color: #ABABAB ;color: white;width: 95%;border: 2px solid black;padding: 10px;margin: 20px;border-radius: 10px}
			input[type=submit]{background-color: green; border: 2px solid red;border-radius: 30px;width: 50%;}
			input[type=submit]:hover{background-color: orange}
			div{border: 15px solid black ;padding:30px;margin: 50px;background-color: #E2E2E2 }
			input[placeholder="emailid"]
			{
				background-color: green;
			}
		</style>

		<title>
			Form
		</title>

	</head>

	<body>

			<div>
			<form method="post"
				action="98.php">
				<!--First Name<input type = "text" placeholder="firstname" name="firstname" required/>-->
				<br>User Name<input type = "text" placeholder="username" name="username" required/><br>
				<br>email<input type ="email" placeholder="email" name="email" required/><br>
				<!--<br>Date of birth=<input type ="date" name="Date of Birth" required/><br>-->
				<br>Password<input type ="Password" placeholder="Password" name="Password" required/>			
                <!--<br><label> gender </label> 				
         	    <br>Male<input type="radio" name="gender"><br>
				<br>Female<input type="radio" name="gender"><br>
        
        
				<br>Reading<input type="checkbox" name="hobby"><br>
				<br>Writing<input type="checkbox" name="hobby"><br>
				<br>Sleeping<input type="checkbox" name="hobby"><br>
				<br>Gaming<input type="checkbox" name="hobby"><br>-->
				<br><input type="submit" name="submit">
				
				
			</form>
            </div>

	</body>

</html>
//<?php
/*if(isset($_POST['firstname']))
{
	echo $_POST['firstname'];
	echo "<br>";
	echo $_POST['Password'];
	echo "<br>";
}*/
if(filter_has_var(INPUT_POST, "submit"))
{
	$email=$_POST['email'];
	$email=filter_var($email,FILTER_SANITIZE_EMAIL);
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "VALID";
		echo "<br>";
		echo $email;
	}
	else
	{
		echo "INVALID";
		echo "<br>";
		echo $email;
	}
}
?>