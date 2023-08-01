<?php 
session_start(); 
include "conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($username)) {
        header("<p>User Name is required</p>");
        exit();
    }else if(empty($pass)){
        header("<p>Password is required</p>");
        exit();
    }else{
    	$pass = hash("sha384", $pass);

        $sql = "SELECT * FROM users WHERE username='$username' AND password ='$pass'";
        
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

         if ($_POST['username'] === 'admin1234' && $_POST['password'] === 'admin1234') {
        // Redirect to the admin.php page
        header('Location: admin.php');
        exit; // Important to stop the script execution after the redirection
    }
         else if ($row['username'] === $username && $row['password'] === $pass) {
                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                header("Location: index.php");
                exit();
            }else{
                echo"<p>Incorect User name or password<p>";
                exit();
            }

        }else{
            echo"<p>Incorect User name or password</p>";
            exit();
        }
    }
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

    <section class="login">
    	<div class="login-head">
    		<h1>LOGIN</h1>
    	</div><!-- /.login-head -->
    	<div class="login-body">
    		<form action="login.php" class="login-form" id="login-form" method="post">
    			<label for="username">Username: </label>
    			<input type="text" id="username" name="username" required>
    			
    			<label for="password">Password: </label>
    			<input type="password" id="password" name="password" required>
    			
    			<input class="button" type="submit" value="Submit">
    		</form>
    	</div><!-- /.login-body -->
             <div class="login-footer">
             	<p>I don't have account!</p>
             	<a href="registration.php"><input class="button1" type="submit" value="Create account"></a>
             </div><!-- /.login-footer -->
    </section><!-- /.login -->

   <figure class="login-img">
			<img src="assets/images/coffeeleaf21.png" alt="">
		</figure>
	
    <script src="user.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>