<?php

include 'is_admin.php';

function user_info()
{
	// session_start();
	if (!$_SESSION['logged_on_user'])
		readfile("login.html");
	else
	{
		echo "
		<div>
		<p>Connecté en tant que: $_SESSION[logged_on_user]</p>

		<p><a href=modif.html> Cliquez ici pour modifier votre compte</a></p>
		<p><a href=logout.php> Cliquez ici pour vous deconnecter</a></p>


		</div>
		";
		if (is_admin($_SESSION['logged_on_user']))
		{
			echo '<p><a href="admin_panel.php">Acceder au panneau d\'administration</a></p>';
		}
	}
}
?>
