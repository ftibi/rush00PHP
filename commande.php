<?php

include 'get_usr_data.php';
include 'put_usr_data.php';
include 'total_amount.php';

function pass_order($login, $panier)
{
	$filename = "./private/ordersdb";

	$data = file_get_contents($filename);
	$data = unserialize($data);
	$panier[login] = $login;
	$data[$login] = $panier;
	$data = serialize($data);
	file_put_contents($filename, $data);
}

session_start();
if ($_SESSION['logged_on_user'] === "default")
	header('location: index.php');
$data = get_usr_data();
$panier = $data[$_SESSION[logged_on_user]][panier];
// print_r($panier);
$total_amount = total_amount();
?>
<html>
<header>
	<title>Commande</title>
	<link rel="stylesheet" href="commande.css">
	<meta charset="UTF-8">
</header>
<a href=index.php>Retour à la page principale</a>
<?php
if ($panier)
{
	echo"<h1>Votre commande a bien été passée</h1>";
	echo"<div>";
	echo"<h2>Récapitulatif</h2>";
	foreach ($panier as $item)
	{
		echo "<p>$item[name] : $item[quantity] : $item[price]$</p>";
		//reste a ajouter la commande sur la db commande et reset le panier
		$data[$_SESSION[logged_on_user]][panier] = array();
		put_usr_data($data);
		pass_order($_SESSION[logged_on_user], $panier);
	}
	echo "<h2>Montant total de votre commande:$total_amount$</h2>";
	echo"</div>";
}
else
	echo"<h1>Votre panier est vide</h1>";

?>



</html>
