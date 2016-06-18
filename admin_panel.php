<?php

$filename = "./private/userdb";
$data = file_get_contents($filename);
$data =unserialize($data);

if ($_POST[login])
	echo "efface $_POST[login]";

?>

<html>
<header>
	<title>Admin</title>
	<link rel="stylesheet" href="index.css">
	<meta charset="UTF-8">
</header>

<h2>Panneau d'Administration</h2>
<h3> Utilisateurs </h3>
<form action=admin_panel.php method=post>
	<ul>

<?php foreach ($data as $login)
{
	echo "<li class=usr><input type=checkbox>$login[login]</li>";
} ?>
	</ul>
<input type=submit name=login value=effacer />
</form>
</html>
