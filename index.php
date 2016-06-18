<?php

include 'install.php';
include 'auth.php';
session_start();

install();
echo "page daccueil";
if (!$_SESSION['logged_on_user'])
	readfile("login.html");
else
	echo "
<p>logged in as $_SESSION[logged_on_user]</p>
<a href=logout.php> Cliquez ici pour vous deconnecter</a>
";

echo "fin";
?>
