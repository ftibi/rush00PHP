<?php

include 'admin_adduser.php';
include 'admin_deluser.php';

$filename = "./private/userdb";
$data = file_get_contents($filename);
$data =unserialize($data);

if ($_POST[login])
	echo "efface $_POST[submit]<br />";

if ($_POST[newlogin] && $_POST[newpasswd])
	admin_adduser($_POST[newlogin], $_POST[newpasswd], 0);

?>

<html>
<header>
	<title>Admin</title>
	<link rel="stylesheet" href="index.css">
	<meta charset="UTF-8">
</header>

<h2>Panneau d'Administration</h2>
<h3> Effacer utilisateurs </h3>
<form action=admin_panel.php method=post>
	<ul>

<?php foreach ($data as $login)
{
	echo "<li class=usr><input type=checkbox >$login[login]</li>";
} ?>
	</ul>
<input type=submit name=del value=effacer />
</form>


<h3> Ajout d'utilisateur </h3>
<form action=admin_panel.php method=post>
	<p>Login: <input type="text" name="newlogin"><br /></p>
	<p>Mot de passe:<input type="text" name="newpasswd"><br /></p>
<input type=submit name=submit value=ajouter />
</form>



</html>
