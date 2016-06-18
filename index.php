<?php

echo "page daccueil";
if (!auth())
	readfile("login.html");
else
	echo" ";
readfile("install.php");

echo "  echo'salut'; ";
?>
