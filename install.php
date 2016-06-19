<?php
function install()
{
	// echo "initialisation du site\n<br />";

	$userdb = "./private/userdb";
	$shopdb = "./private/shopdb";

	// echo"<br />user init<br />";
	$userinit = array("tibo" => array("login" => "tibo", "passwd" => hash("whirlpool", "moi"), "admin" => 1, "panier" => array("montre" => array("name" => "montre", "price" => 50, "quantity" => 1,"img" => "./img/montre.jpg", "tag" => array("accessoires", "bijoux")))),
					"david" => array("login" => "david", "passwd" => hash("whirlpool", "moi"), "admin" => 1, "panier" => array()),
					"toto" => array("login" => "toto", "passwd" => hash("whirlpool", "moi"), "admin" => 0, "panier" => array()));
	// var_dump($userinit);

	// echo"<br />shop init<br />";
	$shopinit = array("tshirt" => array("name" => "tshirt", "price" => 20, "quantity" => 10,"img" => "./img/tshirt.jpg", "tag" => array("vetements")),
					"pull" => array("name" => "pull", "price" => 10, "quantity" => 10,"img" => "./img/pull.jpg", "tag" => array("vetements")),
						"montre" => array("name" => "montre", "price" => 50, "quantity" => 10,"img" => "./img/montre.jpg", "tag" => array("accessoires", "bijoux")));
	// var_dump($shopinit);
	if (!file_exists("./private"))
		mkdir("./private", 0777, true);
	if (!file_exists($userdb))
		file_put_contents($userdb, serialize($userinit));
	if (!file_exists($shopdb))
		file_put_contents($shopdb, serialize($shopinit));
}
?>
