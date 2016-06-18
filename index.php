<?php

include 'install.php';
session_start();

install();
echo "page daccueil";
if (!auth($_POST['login'], $_POST['passwd']))
	readfile("login.html");
else
	echo" ";
readfile("install.php");

echo "salut";
?>
