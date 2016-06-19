<?php

function display_orders()
{
	$filename = "./private/ordersdb";

	$data = file_get_contents($filename);
	$data = unserialize($data);

	foreach ($data as $login)
	{
		echo "<h4>$login[login]</h4>";
		foreach ($login as $item)
		{
			if (is_array($item))
				echo "<h4>$item[name] : $item[quantity] </h4>";
		}
	}
}
?>
