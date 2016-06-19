<?php

include 'get_usr_data.php';
include 'total_amount.php';

session_start();
$data = get_usr_data();
$panier = $data[$_SESSION[logged_on_user]][panier];
// print_r($panier);
$total_amount = total_amount();
?>
<html>
<header>
	<title>Commande</title>
	<link rel="stylesheet" href="index.css">
	<meta charset="UTF-8">
</header>
<a href=index.php>Retour à la page principale</a>
<?php
if ($panier)
{
	echo"<h1>Votre commande a bien été passée</h1>";
	foreach ($panier as $item)
	{
		echo "<h2>$item[name] : $item[quantity] : $item[price]$</h2>";
		echo "Montant total de votre commande:$total_amount";
		//reste a ajouter la commande sur la db commande et reset le panier

	}
}
else
	echo"<h1>Votre panier est vide</h1>";

?>



</html>
