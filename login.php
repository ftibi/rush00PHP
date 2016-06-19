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
		header('refresh:1;url=index.php');
		echo "
<p>Connecte avec succes</p>
<p>Redirection vers la page principale</p>
";
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
