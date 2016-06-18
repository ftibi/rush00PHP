
<?php
function install()
{
	echo "initialisation du site\n<br />";
	$userbd = "./private/userbd";
	$shopbd = "./private/shopbd";
	echo"<br />user init<br />";
	$userinit = array("tibo" => array("login" => "tibo", "passwd" => hash("whirlpool", "moi"), "admin" => 1, "panier" => array()),
					"david" => array("login" => "david", "passwd" => hash("whirlpool", "moi"), "admin" => 1, "panier" => array()),
					"toto" => array("login" => "toto", "passwd" => hash("whirlpool", "moi"), "admin" => 0, "panier" => array()));
	 var_dump($userinit);
	echo"<br />shop init<br />";
	$shopinit = array("Tshirt" => array(20, 10, "./img/tshirt.jpg", "vetements"));
	// var_dump($shopinit);
	if (!file_exists("./private"))
		mkdir("./private", 0777, true);
	if (!file_exists($userbd))
		file_put_contents($userbd, serialize($userinit));
	if (!file_exists($shopbd))
		file_put_contents($shopbd, serialize($shopinit));
}
?>
