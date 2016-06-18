<?php

include 'unserializedb.php';
function nbarticle()
{
	$cpt = 0;
	$user_file = unserializedb("./private/userdb");
	foreach($user_file[$_SESSION[logged_on_user]][panier] as $key => $value)
	{
		$cpt += $user_file[$_SESSION[logged_on_user]][panier][$key][quantity];
	}
	return $cpt;
}

?>
