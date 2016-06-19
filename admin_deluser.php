<?php
function admin_deluser($login)
{
	$filename = "./private/userdb";
	$datausr = file_get_contents($filename);
	$datausr = unserialize($datausr);
	unset($datausr[$login]);
	$datausr = serialize($datausr);
	file_put_contents($filename, $datausr);
}

?>
