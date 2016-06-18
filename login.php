<?php

include 'auth.php';

session_start();

if ($_POST['login'] && $_POST['passwd'])
{
	if (auth($_POST['login'], $_POST['passwd']))
	{
		$_SESSION['logged_on_user'] = $_POST['login'];
		header('refresh:2;url=index.php');
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
