<?php

session_start();
function fusion_panier()
{

	$user_file = unserializedb("./private/userdb");
	foreach($user_file[$_SESSION[logged_on_user]][panier] as $key => $value)
	{
		$user_file[$_SESSION[logged_on_user]][panier][$key][quantity] += 1;//  $_SESSION[no_user][panier][$key][quantity];
	}
	$user_file = serialize($user_file);
	file_put_contents("./private/userdb",$user_file );
}

?>
