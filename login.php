<?php
include 'auth.php';
include 'fusion_panier.php';
include 'unserializedb.php';

session_start();


if ($_POST['login'] && $_POST['passwd'])
{
	if (auth($_POST['login'], $_POST['passwd']))
	{
		$_SESSION['logged_on_user'] = $_POST['login'];
		fusion_panier();
		header('Location: http://google.com');
	}
	else
		echo "Login/user invalide";
}
else if (!$_POST['login'])
{
	echo "Pas de login valide";
	exit();
}
else
{
	echo "Pas de mdp valide";
	exit();
}
?>
