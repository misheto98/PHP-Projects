<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "php19220";

try {
	$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

if ( isset( $_POST['submit'] ) ) {

	$username = $_POST['username'];
	$password = $_POST['password'];
  $Confirm_password = $_POST['Confirm_password'];
  $email = $_POST['email'];



if(validate_username($username) && validate_password($password,$Confirm_password)  && validate_email($email) ){

  $sql = "INSERT INTO users ( username, password,email) VALUES (?,?,?)";
	$connection->prepare($sql)->execute([$username, $password,$email]);

    header("location: login.php");

   }

}

function validate_username($username) {
  if (strlen($username) >= 3) {
  return true;
  } else {
  echo"Enter the new username";
  }

}

function validate_password($password,$Confirm_password ) {
   if($password == $Confirm_password ){
    return true;
    }else{
      echo "Password isn't match";
    }
}


function validate_email($email) {
  $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
  
  if (preg_match($pattern, $email)) {
    return true;

  } else {
   echo "This email is not valid";
  }
}




?>


<html>
<head>
<link rel="stylesheet" href="styleReguster.css">
</head>
<body>

<div class="center">
      <h1>Register</h1>
      <form  action="" method="post">
        <div class="txt_field">
          <input type="text" name="username" placeholder="contains minimum three characthers" >
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password"  placeholder="">
          <span></span>
          <label>Password</label>
        </div>

        <div class="txt_field">
          <input type="password" name="Confirm_password" >
          <span></span>
          <label>Confirm_password</label>
        </div>

        <div class="txt_field">
          <input type="email" name="email" placeholder="Must contains{characher}@{extention}" >
          <span></span>
          <label>Email</label>
        </div>
        
        <input type="submit" name="submit" value="Register">
        <div class="signup_link">
          You already a member? <a href="login.php">Login</a>
        </div>
      </form>

</body>
</html>