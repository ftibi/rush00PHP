<?php

if (is_admin($_SESSION['logged_on_user']))
{
	echo "<a href="modif.php">Acceder au panneau d'administration</a>";
}

?>

<div>
	<p><?php $_SESSION['logged_on_user'] ?></p>
	<a href="modif.php"> Cliquez ici pour modifier votre compte</a>
	<a href="logout.php"> Cliquez ici pour vous deconnecter</a>
</div>
