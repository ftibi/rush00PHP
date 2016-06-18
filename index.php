<?php
include 'install.php';
include 'auth.php';


session_start();
install();
echo "page daccueil";
if (!$_SESSION['logged_on_user'])
	readfile("login.html");
else
	echo "logged in as $_SESSION[logged_on_user]";
echo "fin";
?>
