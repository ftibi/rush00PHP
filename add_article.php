<?php
session_start();
include 'unserializedb.php';

$data_file = unserializedb("./private/userdb");
$shop_file = unserializedb("./private/shopdb");
if ($_SESSION[logged_on_user] !== "default")
{
if ($data_file[$_SESSION[logged_on_user]][panier][$_POST[article]])
{
	$data_file[$_SESSION[logged_on_user]][panier][$_POST[article]][quantity] += 1;
}
else
{
	$data_file[$_SESSION[logged_on_user]][panier][$_POST[article]] = $shop_file[$_POST[article]];
	$data_file[$_SESSION[logged_on_user]][panier][$_POST[article]][quantity] = 1;
}
}
else
{
	if ($_SESSION[def][panier][$_POST[article]])
	{
		$_SESSION[def][panier][$_POST[article]][quantity] += 1;
	}
	else
	{
		$_SESSION[def][panier][$_POST[article]] = $shop_file[$_POST[article]];
		$_SESSION[def][panier][$_POST[article]][quantity] = 1;
	}
}

$data_file = serialize($data_file);
file_put_contents("./private/userdb",$data_file );
header("location: index.php");
?>
