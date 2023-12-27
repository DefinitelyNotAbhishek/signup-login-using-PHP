<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
    <link rel="stylesheet" href="styles.css"
</head>
<body>

	<a href="logout.php">Logout</a>
	
<div id="container">
    <div>
        <br>
        <h1>
        Hello, <?php echo $user_data['user_name']; ?> <br>
        Welcome!! To My Website 
       </h1>
    <div>
    <div id="dogimg">
        <img src="Dog 14.png">
    </div>
</div>
</body>
</html>