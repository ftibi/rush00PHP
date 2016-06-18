<?php

function total_amount()
{
	$cpt = 0;
	$user_file = unserializedb("./private/userdb");
	if ($user_file[$_SESSION[logged_on_user]])
{
	foreach($user_file[$_SESSION[logged_on_user]][panier] as $key => $value)
	{
		$cpt += $user_file[$_SESSION[logged_on_user]][panier][$key][price] * $user_file[$_SESSION[logged_on_user]][panier][$key][quantity];
	}
	return $cpt;
}
else
{
	foreach($_SESSION[no_user][panier] as $key => $value)
	{
		$cpt += $_SESSION[no_user][panier][$key][price] * $_SESSION[no_user][panier][$key][quantity];
	}
	return $cpt;
}

}

?>
