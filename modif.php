<?php

include 'get_usr_data.php';

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
{
	$data = get_usr_data();


	if (!$data[$_POST['login']] || $data[$_POST['login']]['passwd'] !== hash("whirlpool",$_POST['oldpw']))
	{
			echo ("ERROR\n");
			exit();
	}
	else
	{
		header('Location:./index.php');
		echo ("OK\n");
		$data[$_POST['login']] = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['newpw']));
		$data = serialize($data);
		file_put_contents($filename, $data);
	}

}
else
	echo ("ERROR : Tous les champs n'ont pas été renseignés\n");
exit();
?>
