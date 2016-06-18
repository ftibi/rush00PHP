<?php
if ($_POST['login'] && $_POST['passwd'])
{
	if (!file_exists("./private"))
		mkdir("./private", 0777, true);
	$finename = "./private/userbd";
	if (file_exists($finename))
		$data_file = file_get_contents($finename, true);
	else
		$data_file = "";
	$data_file = unserialize($data_file);
	if ($data_file[$_POST['login']])
		echo ("ERROR\n");
	else
	{
	//	print_r($data_file);
		$data_file[$_POST['login']] = array("login" => $_POST['login'], "passwd" => hash("whirlpool", $_POST['passwd']));
	//	print_r($data_file);
		$data_file = serialize($data_file);
		file_put_contents($finename, $data_file);
	}
}
else
{
	// header("Location: index.html");
	echo ("ERROR\n");
}
exit();
?>
