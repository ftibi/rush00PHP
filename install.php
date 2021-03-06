<?php
function install()
{
	// echo "initialisation du site\n<br />";

	$userdb = "./private/userdb";
	$shopdb = "./private/shopdb";
	$ordersdb = "./private/ordersdb";

	// echo"<br />user init<br />";
	$userinit = array("tibo" => array("login" => "tibo", "passwd" => hash("whirlpool", "moi"), "admin" => 1, "panier" => array("montre" => array("name" => "montre", "price" => 50, "quantity" => 1,"img" => "./img/montre.jpg", "tag" => array("accessoires", "bijoux")))),
					"david" => array("login" => "david", "passwd" => hash("whirlpool", "moi"), "admin" => 1, "panier" => array()),
					"toto" => array("login" => "toto", "passwd" => hash("whirlpool", "moi"), "admin" => 0, "panier" => array()));
	// var_dump($userinit);

	// echo"<br />shop init<br />";
	$shopinit = array("tshirt" => array("name" => "tshirt", "price" => 10, "quantity" => 10,"img" => "./img/tshirt.jpg", "tag" => array("vetements")),
					"pull" => array("name" => "pull", "price" => 20, "quantity" => 10,"img" => "./img/pull.jpg", "tag" => array("vetements")),
					"espadrilles" => array("name" => "espadrilles", "price" => 5, "quantity" => 10,"img" => "./img/espadrilles.jpg", "tag" => array("vetements", "chaussures")),
					"sneakers" => array("name" => "sneakers", "price" => 90, "quantity" => 10,"img" => "./img/sneakers.jpg", "tag" => array("vetements", "chaussures")),
					"chaussures" => array("name" => "chaussures", "price" => 130, "quantity" => 10,"img" => "./img/chaussures.jpg", "tag" => array("vetements", "chaussures")),
					"manteau" => array("name" => "manteau", "price" => 100, "quantity" => 10,"img" => "./img/manteau.jpg", "tag" => array("vetements")),
					"parfum" => array("name" => "parfum", "price" => 60, "quantity" => 10,"img" => "./img/parfum.jpg", "tag" => array("accessoires")),
					"collier" => array("name" => "collier", "price" => 5, "quantity" => 10,"img" => "./img/collier.jpg", "tag" => array("accessoires", "bijoux")),
					"bracelet" => array("name" => "bracelet", "price" => 10, "quantity" => 10,"img" => "./img/bracelet.jpg", "tag" => array("accessoires", "bijoux")),
					"trotinette" => array("name" => "trotinette", "price" => 30, "quantity" => 10,"img" => "./img/trotinette.jpg", "tag" => array("loisir")),
					"skateboard" => array("name" => "skateboard", "price" => 40, "quantity" => 10,"img" => "./img/skateboard.jpg", "tag" => array("loisir")),
					"costume" => array("name" => "costume", "price" => 300, "quantity" => 10,"img" => "./img/costume.jpg", "tag" => array("vetements")),
					"sac_à_dos" => array("name" => "sac_à_dos", "price" => 60, "quantity" => 10,"img" => "./img/sacados.jpg", "tag" => array("bagagerie")),
					"sac_à_main" => array("name" => "sac_à_main", "price" => 90, "quantity" => 10,"img" => "./img/sacamain.jpg", "tag" => array("accessoires", "bagagerie")),
					"télévision" => array("name" => "télévision", "price" => 200, "quantity" => 10,"img" => "./img/television.jpg", "tag" => array("hitech")),
					"chaine_Hi-Fi" => array("name" => "chaine_Hi-Fi", "price" => 80, "quantity" => 10,"img" => "./img/hifi.jpg", "tag" => array("hitech")),
					"montre" => array("name" => "montre", "price" => 50, "quantity" => 10,"img" => "./img/montre.jpg", "tag" => array("accessoires", "bijoux")));
	// var_dump($shopinit);

	$orderinit = array();//array("david" => array("montre" => 42));

	if (!file_exists("./private"))
		mkdir("./private", 0777, true);
	if (!file_exists($userdb))
		file_put_contents($userdb, serialize($userinit));
	if (!file_exists($shopdb))
		file_put_contents($shopdb, serialize($shopinit));
	if (!file_exists($ordersdb))
		file_put_contents($ordersdb, serialize($orderinit));
}
?>
