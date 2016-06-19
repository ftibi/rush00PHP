<?php

function display_panier()
{
	if ($_SESSION[logged_on_user] !== "default")
	{
		echo"<div id=panier>
		<a href=page_panier.php ><h3>panier</h3></a>
		<p>nb: ";
	}
	else
	{
		echo"<div id=panier>
			<h3>panier</h3>
			<p><a href='login.html'>Connectez  vous pour accéder à votre panier</a></p>
			<p>nb: ";
	}
		echo nbarticle();
		echo"</p>
		<p>total: ";
		echo total_amount();
		echo" $ </p>
		</div>";


}



?>
