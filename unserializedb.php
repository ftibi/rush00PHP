<?php

function unserializedb($finename)
{
	if (file_exists($finename))
		$data_file = file_get_contents($finename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);
	return ($data_file);
}
?>
