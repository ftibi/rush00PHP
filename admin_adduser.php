<?php
function admin_adduser($login, $passwd)
{
	$filename = "./private/userdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);

	if ($login && $passwd)
	{
		if ($data[$login])
		{
			return (0);
			// echo ("Login deja utilise\n");
		}
		else
		{
			$data[$login] = array("login" => $login, "passwd" => hash("whirlpool", $passwd), "admin" => 0, "panier" => []);
			$data = serialize($data);
			file_put_contents($filename, $data);
			return (1);
		}
	}
	else
	{
		return (0);
		// echo ("ERROR login ou mdp manquant\n");
	}

}


?>
