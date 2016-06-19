<?php
include 'display_panier.php';
include 'nbarticle.php';
include 'total_amount.php';
include 'install.php';
include 'auth.php';
include 'display_cat.php';
include 'display_articles.php';
include 'user_info.php';
session_start();
install();
if (!$_SESSION[logged_on_user])
{
	$_SESSION[logged_on_user] = "default";
	$_SESSION[def] =array("default" => array("login" => "default", "passwd" => hash("whirlpool", "moi"), "admin" => 0, "panier" => array()));
}
?>
<html>
<head>
	<title>Such a random shop</title>
	<link rel="stylesheet" href="index.css">
	<meta charset="UTF-8">
</head>
<body>

<div class=top2>
	<div class=part id=topleft>
		<?php user_info(); ?>
	</div>
	<div class=part id=topright>
		<?php display_panier(); ?>
	</div>
</div>

<div id=center1 class=part>
	<?php display_articles(); ?>
</div>
<div id=center2 class=part>
	<?php display_cat(); ?>
</div>
</body>
</html>
