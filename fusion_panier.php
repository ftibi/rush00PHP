<?php

function fusion_panier()
{
	$user_file = unserializedb("./private/userdb");

		if (is_array($_SESSION[def][panier]))
		{
			 foreach($_SESSION[def][panier] as $key => $value)
			 {
				if (isset($user_file[$_SESSION[logged_on_user]][panier][$key]))
			 	$user_file[$_SESSION[logged_on_user]][panier][$key][quantity] += $_SESSION[def][panier][$key][quantity];
				else
			 	$user_file[$_SESSION[logged_on_user]][panier][$key] = $_SESSION[def][panier][$key];
			 }
		}
	$user_file = serialize($user_file);
	file_put_contents("./private/userdb", $user_file);
}

?>
