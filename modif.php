<?php


if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
{

	if (!file_exists("../private"))
		mkdir("../private", 0777, true);

	$data_file = "";
	$finename = "../private/passwd";
	if (file_exists($finename))
		$data_file = file_get_contents($finename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);


	if (!$data_file[$_POST['login']] || $data_file[$_POST['login']]['passwd'] !== hash("whirlpool",$_POST['oldpw']))
	{
			echo ("ERROR\n");
			exit();
	}
	else
	{
		header('Location:./index.html');
		echo ("OK\n");
		$data_file[$_POST['login']] = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['newpw']));
		$data_file = serialize($data_file);
		file_put_contents($finename, $data_file);
	}

}
else
	echo ("ERROR\n");
exit();
?>
