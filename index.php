<?php

include 'install.php';
include 'auth.php';
session_start();

install();
echo "page daccueil";
if (!auth($_POST['login'], $_POST['passwd']))
	readfile("login.html");
else
	echo" ";

echo "salut";
?>
