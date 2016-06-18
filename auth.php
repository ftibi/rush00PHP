<?php

function auth($login, $passwd)
{

	$finename = "../private/userbd";
	if (file_exists($finename))
		$data_file = file_get_contents($finename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);
	if ($data_file[$login]] && $data_file[$login]['passwd'] === hash("whirlpool",$passwd]))
		return (true);
	else
		return (false);
}

?>
