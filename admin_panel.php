<?php

include 'admin_deluser.php';
include 'admin_adduser.php';

$filename = "./private/userdb";
$data = file_get_contents($filename);
$data = unserialize($data);

foreach ($_POST as $key => $value)
{
	if ($value == "del")
	{
		admin_deluser($key);
		header("location: admin_panel.php");
	}
}
if ($_POST[login] && $_POST[passwd])
{
	admin_adduser($_POST[login], $_POST[passwd]);
	header("location: admin_panel.php");
}

?>

<html>
<header>
	<title>Admin</title>
	<link rel="stylesheet" href="index.css">
	<meta charset="UTF-8">
</header>

<h2>Panneau d'Administration</h2>
<a href=index.php>Retour à la page principale</a>
<h3> Effacer utilisateurs </h3>
<form action=admin_panel.php method=post>
	<ul>

<?php foreach ($data as $login)
{
	echo "<li class=usr><input type=checkbox name=$login[login] value=del>$login[login]</li>";
} ?>
	</ul>
<input type=submit name=del_array value=effacer />
</form>


<h3> Ajout d'utilisateur </h3>
<form action=admin_panel.php method=post>
	<p>Login: <input type="text" name="login"><br /></p>
	<p>Mot de passe:<input type="text" name="passwd"><br /></p>
<input type=submit name=submit value=ajouter />
</form>



</html>
