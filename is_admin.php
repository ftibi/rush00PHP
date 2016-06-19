<?php

function is_admin($login)
{
	$filename = "./private/userdb";
	$data_file = file_get_contents($filename);
	$data_file = unserialize($data_file);
	if ($data_file[$login][admin] === 1)
		return (true);
	else
		return (false);
}


?>
