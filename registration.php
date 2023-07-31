<?php 

include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
  	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];

    // Validate input (optional but recommended)
    function validate($data){
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
    }

    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);
    $email = validate($_POST['email']);
    $fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
    $phone = validate($_POST['phone']);
    
    if (empty($username) || empty($password) || empty($email) || empty($fname) || empty($lname) || empty($phone)) {
        die("Please fill all fields.");
    }

    $pass = hash("sha384", $pass);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the user into the database
    $sql = "INSERT INTO users (fname, lname, email, username, password, phone) VALUES ('$fname','$lname','$email','$username', '$pass', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";

        header("Location: login.php");

		exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" type="text/css" media="all" />
	<title>Costra</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logoup1.png" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="preload" as="style">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lumanosimo&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
</head>
<body>
	
	<!-- Login section -->

	<section class="reg">
		<div class="reg-head">
			<h1>SIGN UP</h1>
		</div><!-- /.reg-head -->
		<div class="reg-body">
			<form method="post">
				<label for="username">Username: </label>
				<input type="text" id="username" name="username" required>
				
				<label for="password">Password: </label>
				<input type="text" id="password" name="password" required>
				
				<label for="email">Email: </label>
				<input type="text" id="email" name="email" required>
				
				<label for="fname">First name: </label>
				<input type="text" id="fname" name="fname" required>

				<label for="lname">Last name: </label>
				<input type="text" id="lname" name="lname" required>
				
				<label for="phone">Phone: </label>
				<input type="text" id="phone" name="phone" required>
				
				<input class="button" type="submit" value="Submit">
			</form>

		</div><!-- /.reg-body -->
	<div class="reg-footer">
		<p>I have account ?</p>
		<a href="login.php"><input class="button1" type="submit" value="LOG IN"></a>
	</div><!-- /.reg-footer -->
	</section><!-- /.reg -->
	

	<script type="text/javascript" src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>