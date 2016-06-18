<?php

include 'install.php';
include 'auth.php';
include 'display_cat.php';
session_start();

install();
echo "page daccueil";
if (!$_SESSION['logged_on_user'])
	readfile("login.html");
else
	echo "
<p>logged in as $_SESSION[logged_on_user]</p>
<p><a href=logout.php> Cliquez ici pour vous deconnecter</a></p>
<p><a href=modif.html> Cliquez ici pour modifier votre compte</a></p>
<p><a href=shop.php> Acceder au magasin</a></p>
";

echo "fin";
?>


<html>
<head>
	<link rel="stylesheet" href="index.css">
</head>
<div>
	<?php display_cat(); ?>
</div>

</html>
