<?php
<<<<<<< HEAD
if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
{
	if (!file_exists("./private"))
		mkdir("./private", 0777, true);
	$data_file = "";
	$finename = "./private/passwd";
	if (file_exists($finename))
		$data_file = file_get_contents($finename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);
	if (!$data_file[$_POST['login']] || $data_file[$_POST['login']]['passwd'] !== hash("whirlpool",$_POST['oldpw']))
=======

include 'get_usr_data.php';

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
{
	$data = get_usr_data();


	if (!$data[$_POST['login']] || $data[$_POST['login']]['passwd'] !== hash("whirlpool",$_POST['oldpw']))
>>>>>>> tibo
	{
			echo ("ERROR\n");
			exit();
	}
	else
	{
<<<<<<< HEAD
=======
		header('Location:./index.php');
>>>>>>> tibo
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
