<?php

session_start();
function fusion_panier()
{
	if ($user_file = unserializedb("./private/userdb") === FALSE)
		echo "FAUX";

	foreach($_SESSION[no_user][panier] as $article)
	{
		//$user_file[$_SESSION[logged_on_user]][panier][$key][quantity] = 42;//+= $_SESSION[no_user][panier][$value][quantity];
	}
	$user_file = serialize($user_file);
	file_put_contents("./private/userdb",$user_file );
}

?>
