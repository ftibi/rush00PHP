<?php
session_start();
	include 'install.php';
	include 'auth.php';
	include 'nbarticle.php';
	include 'total_amount.php';
include 'unserializedb.php';

install();

if (!$_SESSION[logged_on_user])
	$_SESSION[no_user] = array("login" => no_user, "admin" => 0, "panier" => array());


echo "page daccueil";
if (!$_SESSION['logged_on_user'])
	readfile("login.html");
else
	echo "
<p>logged in as $_SESSION[logged_on_user]</p>
<a href=logout.php> Cliquez ici pour vous deconnecter</a>
";
echo	"____LOG____".$_SESSION[logged_on_user]."FIN";
	?>

	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="index.css">
			<title>ft_minishop</title>
		</head>

	<body>


	<div id="panier">
		<?php
		//display_panier();
		?>
		<h3>panier</h3>
	<p>nb: <?php echo nbarticle(); ?> </p>
	<p>total: <?php echo total_amount(); ?> $ </p>
	</div>

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
</div>
