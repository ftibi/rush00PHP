<?php

include 'install.php';
include 'auth.php';
include 'display_cat.php';
include 'display_articles.php';
include 'user_info.php';
// include 'panier.php';

session_start();
install();
?>


<html>
<head>
	<title>Awesome shop</title>
	<link rel="stylesheet" href="index.css">
	<meta charset="UTF-8">
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
