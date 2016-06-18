<?php
session_start();
include 'unserializedb.php';

$data_file = unserializedb("./private/userdb");
$shop_file = unserializedb("./private/shopdb");
// echo "_____DATA________";
// print_r($data_file);
//
// echo "_____SHOP________";
// print_r($data_file[$_SESSION[logged_on_user]]);
// echo "_____FINTAB________";
// print_r($shop_file);

if ($data_file[$_SESSION[logged_on_user]][panier][$_POST[article]])
{
//	echo "___DANS_IF___";
	$data_file[$_SESSION[logged_on_user]][panier][$_POST[article]][quantity] += 1;
}
else
{
//	echo "___DANS_ELSE___";
	$data_file[$_SESSION[logged_on_user]][panier][$_POST[article]] = $shop_file[$_POST[article]];
	$data_file[$_SESSION[logged_on_user]][panier][$_POST[article]][quantity] = 1;
}
//	echo "_____NAME______$_POST[article]";
//echo	"____LOG____".$_SESSION[logged_on_user]."FIN";
//echo "_____TSHIRT________";
//print_r($shop_file[$_POST[article]]);
//echo "_____DATA________";
//print_r($data_file);
$data_file = serialize($data_file);
file_put_contents("./private/userdb",$data_file );

?>
