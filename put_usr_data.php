<?php
function put_usr_data($data)
{
	$filename = "./private/userdb";
	$data = serialize($data);
	file_put_contents($filename, $data);
}
?>
