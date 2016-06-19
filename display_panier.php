<?php

function display_panier()
{
	echo"<div id=panier>
		<h3>panier</h3>
		<p>nb: ";
		echo nbarticle();
		echo"</p>
		<p>total: ";
		echo total_amount();
		echo" $ </p>
		</div>";


}



?>
