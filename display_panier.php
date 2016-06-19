<?php

function display_panier()
{
	echo"<div id=panier>
		<a href=page_panier.php ><h3>panier</h3></a>
		<p>nb: ";
		echo nbarticle();
		echo"</p>
		<p>total: ";
		echo total_amount();
		echo" $ </p>
		</div>";


}



?>
