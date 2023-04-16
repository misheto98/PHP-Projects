<?php
session_start();

if ( !$_SESSION['user'] ) {
	
	// ако няма логнат потребител се прави пренасочване към login.php
	
	header("location: login.php");
	exit;
}

?>

<link rel="stylesheet" href="styleHomePage.css">

<?php include("menu.php"); ?>