<?php

function get_shop_data()
{
	$filename = "./private/shopdb";
	$data_shop = file_get_contents($filename);
	$data_shop = unserialize($data_shop);
	return ($data_shop);
}

function put_shop_data($data)
{
	$filename = "./private/shopdb";
	$data = serialize($data);
	file_put_contents($filename, $data);
}
?>
