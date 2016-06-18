<?php

function display_cat()
{
	$filename = "./private/shopdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);
	// print_r($data);
	$categories = [];
	foreach ($categories as $elem)
	{
		echo "



";
	}
}

?>
