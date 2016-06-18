<?php

if ($_POST['login'] && $_POST['passwd'])
{

	$finename = "./private/userbd";

	$data_file = unserialize($data_file);

	if ($data_file[$_POST['login']])
		echo ("ERROR\n");
	else
	{
		header("refresh: 2;url=index.php");
		echo ("Compte cree avec succes\n");
		$data_file[$_POST['login']] = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd']));
		$data_file = serialize($data_file);
		file_put_contents($finename, $data_file);
	}
}
else
{
	// header("Location: index.html");
	echo ("ERROR\n");
}
exit();
?>
