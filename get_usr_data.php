<?php

function get_usr_data()
{
	$filename = "./private/userdb";
	$data_file = file_get_contents($filename);
	$data_file = unserialize($data_file);
	return ($data_file);
}
?>
