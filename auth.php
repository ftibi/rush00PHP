<?php

function auth($login, $passwd)
{

	$finename = "../private/passwd";
	if (file_exists($finename))
		$data_file = file_get_contents($finename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);
	if ($data_file[$_POST['login']] && $data_file[$_POST['login']]['passwd'] === hash("whirlpool",$_POST['passwd']))
		return (true);
	else
		return (false);
}

?>
