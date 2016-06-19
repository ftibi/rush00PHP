<?php

include 'admin_deluser.php';
include 'admin_adduser.php';
include 'display_orders.php';
include 'get_shop_data.php';
include 'del_article_admin.php';
include 'add_article_admin.php';

$filename = "./private/userdb";
$data = file_get_contents($filename);
$data = unserialize($data);

$filenameshop = "./private/shopdb";
$shopdata = file_get_contents($filenameshop);
$shopdata = unserialize($shopdata);




// $shopdata = get_shop_data();
print_r($shopdata);

foreach ($_POST as $key => $value)
{
	if ($value == "del")
	{
		admin_deluser($key);
		header("location: admin_panel.php");
	}
	if ($value = "del_item")
	{
		del_article_admin($key);
		header("location: admin_panel.php");
	}
}

if ($_POST[login] && $_POST[passwd])
{
	admin_adduser($_POST[login], $_POST[passwd]);
	header("location: admin_panel.php");
}
if ($_POST[name] && $_POST[price] && $_POST[img] && $_POST[tag])
{
	add_article_admin($_POST[name], $_POST[price], $_POST[img], $_POST[tag]);
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


<h3> Effacer un Article </h3>
<form action=admin_panel.php method=post>
	<ul>
<?php
foreach ($shopdata as $item => $value)
{
	echo "<li class=usr><input type=checkbox name=$item[name] value=del_item>$item[name]</li>";
} ?>
	</ul>
<input type=submit name=del_array value=effacer />
</form>

<h3> Ajouter un Article </h3>
<form action=admin_panel.php method=post>
	<p>Nom: <input type="text" name="name"></p>
	<p>Prix:<input type="text" name="price"></p>
	<p>Adresse de l'image:<input type="text" name="img"></p>
	<p>Tags:<input type="text" name="tag"></p>
<input type=submit name=submit value=ajouter />
</form>

<h3>Commandes passées</h3>
<?php display_orders(); ?>


</html>
