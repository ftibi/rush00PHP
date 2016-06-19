<?php
function nbarticle()
{
	$cpt = 0;
	$user_file = unserializedb("./private/userdb");
	if ($_SESSION[logged_on_user] !== "default")
	{
		foreach($user_file[$_SESSION[logged_on_user]][panier] as $key => $value)
		{
			$cpt += $user_file[$_SESSION[logged_on_user]][panier][$key][quantity];
		}
	}
	else
	{
		if (is_array($_SESSION[def][panier]))
		{
			foreach($_SESSION[def][panier] as $key => $value)
			{
				$cpt +=$_SESSION[def][panier][$key][quantity];
			}
		}
	}
	return $cpt;
}

?>
