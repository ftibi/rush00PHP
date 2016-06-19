<?php

function display_articles()
{
	$filename = "./private/shopdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);
	// print_r($data);
	foreach ($data as $elem)
	{
		echo "
<p>$elem[name] : $elem[price]$</p>
<img class=galery_img src=$elem[img] />
<input type=submit name=article value=tshirt>

";
	}
}

?>
