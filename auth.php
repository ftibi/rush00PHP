<?php
function auth($login, $passwd)
{
	$filename = "./private/userdb";
	if (file_exists($filename))
		$data_file = file_get_contents($filename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);
	if ($data_file[$login] && $data_file[$login]['passwd'] === hash("whirlpool",$passwd))
		return (true);
	else
		return (false);
}
?>
