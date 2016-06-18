<?php
include 'auth.php';

session_start();

if ($_POST['login'] && $_POST['passwd'])
{
	if (auth($_POST['login'], $_POST['passwd']))
	{
		$_SESSION['logged_on_user'] = $_POST['login'];
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
