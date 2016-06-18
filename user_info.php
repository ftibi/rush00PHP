<?php

include 'is_admin.php';

session_start();
echo "$_SESSION[logged_on_user]";
if (!$_SESSION['logged_on_user'])
{
	header('location: index.php');
}
if (is_admin($_SESSION['logged_on_user']))
{
	echo '<a href="modif.php">Acceder au panneau d\'administration</a>';
}

?>

<div>
	<p><?php $_SESSION['logged_on_user'] ?></p>

<p><a href="modif.php"> Cliquez ici pour modifier votre compte</a></p>
<p><a href="logout.php"> Cliquez ici pour vous deconnecter</a></p>


</div>
