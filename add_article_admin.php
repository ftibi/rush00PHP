<?php

function add_article_admin($name, $price, $img, $tag)
{
	$data = get_shop_data();
	// print_r($data);
	$tag = explode(',', $tag);
	if (!$data[$name])
	{
		$data[$name] = array("name" => $name, "price" => $price, "img" => $img, "tag" => $tag);
		$data = serialize($data);
		put_shop_data($data);
	}
}

?>
