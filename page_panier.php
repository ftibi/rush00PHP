<?php

include 'del_article_panier.php';

session_start();
$data = get_usr_data();
$panier = $data[$_SESSION[logged_on_user]][panier];
// print_r($panier);
// print_r($_POST);

foreach ($_POST as $key => $value)
{
	if ($value == "del")
	{
		// echo "delete $key<br />";
 		del_article_panier($_SESSION[logged_on_user], $key);
		header('location: page_panier.php');
	}
}

?>


<html>
<header>
	<title>Panier</title>
	<link rel="stylesheet" href="index.css">
	<meta charset="UTF-8">
</header>
<a href=index.php>Retour à la page principale</a>
<h1> Votre panier </h1>

<form action=page_panier.php method=post>
<?php
echo"<ul>";
	foreach($panier as $item)
	{
		echo "<li class=usr><input type=checkbox name=$item[name] value=del> $item[name] : $item[quantity] : $item[price]</li>";
	}
echo"</ul>";
?>
<input type=submit value=effacer />
</form>

<form action=commande.php method=post>
	<input type=submit value='passer commande' />
</form>

</html>
