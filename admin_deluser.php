<?php
function admin_deluser($login)
{
	$filename = "./private/userdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);
	unset($data[$login]);
	$data = serialize($data);
	file_put_contents($filename, $data);
}

?>
