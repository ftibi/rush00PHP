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
	$_SESSION[no_user] = array("login" => no_user, "admin" => 0, "panier" => array());

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
	<?php display_panier(); ?>
</div>
<div class=part>
	<?php display_articles(); ?>
</div>
<div class=part>
	<?php display_cat(); ?>
</div>

</html>

<!--


<div class="list_article">
<div id="article_tshirt">
<form action="add_article.php" method="POST" >
<img id="tshirt" alt="tshiry" title="tshirt" src="img/tshirt.jpg">
<input type="submit" name="article" value="tshirt">
</form>

<div id="article_tshirt">
<form action="add_article.php" method="POST" >
<img id="tshirt" alt="tshiry" title="tshirt" src="img/tshirt.jpg">
<input type="submit" name="name" value="OK">
</form>


</div>

</div> -->
