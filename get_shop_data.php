<?php

function get_shop_data()
{
	$filename = "./private/shopdb";
	$data_file = file_get_contents($filename);
	$data_file = unserialize($data_file);
	return ($data_file);
}

?>
