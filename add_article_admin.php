<?php

function add_article_admin($name, $price, $img, $tag)
{
	$shopfile = "./private/shopdb";
	$shopdata = file_get_contents($shopfile);
	$shopdata = unserialize($shopdata);
	$tag = explode(',', $tag);
	if (!$shopdata[$name])
	{
		$shopdata[$name] = array("name" => $name, "price" => $price, "img" => $img, "tag" => $tag);
		$shopdata = serialize($shopdata);
		file_put_contents($shopfile, $shopdata);
	}
}

?>
