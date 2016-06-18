<?php

echo "initialisation du site";

$userbd = "./private/userbd";
$shopbd = "./private/shopbd";

$shopinit = array()

if (!file_exists("./private"))
	mkdir("./private", 0777, true);
if (!file_exists($userbd))
	file_put_contents($userbd, serialize($userinit));
if (!file_exists($shopbd))
	file_put_contents($shopbd, serialize($shopinit));



?>
