<?php
session_start();
include 'unserializedb.php';
$data = unserializedb("./private/shopdb");
	foreach ($data as $elem)
	{
		if (array_search($_POST[category], $elem[tag]) !== FALSE)
		{
			$_SESSION[cat] = $_POST[category];
			header("location: index.php");
		}
	}
?>
