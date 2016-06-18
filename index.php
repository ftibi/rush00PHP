<?php

include 'install.php';
include 'auth.php';
include 'display_cat.php';
include 'display_articles.php';
include 'user_info.php';

session_start();
install();
// echo "page daccueil";

// 	echo "
// <p>logged in as $_SESSION[logged_on_user]</p>
// <p><a href=logout.php> Cliquez ici pour vous deconnecter</a></p>
// <p><a href=modif.html> Cliquez ici pour modifier votre compte</a></p>
// <p><a href=shop.php> Acceder au magasin</a></p>
// ";

// echo "fin";
?>


<html>
<head>
	<title>Awesome shop</title>
	<link rel="stylesheet" href="index.css">
</head>
<div class=part>
	<?php user_info(); ?>
</div>
<div class=part>
	<?php display_articles(); ?>
</div>
<div class=part>
	<?php display_cat(); ?>
</div>

</html>
