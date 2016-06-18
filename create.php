<?php

if ($_POST['login'] && $_POST['passwd'])
{

	$filename = "./private/userdb";
	$data_file = file_get_contents($filename);
	$data_file = unserialize($data_file);

	if ($data_file[$_POST['login']])
	{
		header("refresh:2 ;url=index.php");
		echo ("Login deja utilise\n");
	}
	else
	{
		header("refresh:2 ;url=index.php");
		echo ("Compte cree avec succes\n");
		$data_file[$_POST['login']] = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd']), "admin" => 0, "panier" => []);
		$data_file = serialize($data_file);
		file_put_contents($filename, $data_file);
	}
}
else
{
	header("refresh:2 ;url=index.php");
	echo ("ERROR login ou mdp manquant\n");
}
exit();
?>
