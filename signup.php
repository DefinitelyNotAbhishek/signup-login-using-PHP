<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="sigininstyles.css">
</head>
<body>
    <div id="box">
        <form method="post">
            <div id="heading">Sign In</div>
            <br><br>
            <label id="label">Username</label>
            <input id="text" name="user_name"><br>
            <label id="label">Password</label>
            <input id="text" type="password" name="password"><br>
            <br>
            <input id="button" type="submit" value=" Register"><br><br><br>

            <a id="loginpage" href="login.php">Already Registered? Log In Here</a>

        </form>

    </div>
</body>
</html>