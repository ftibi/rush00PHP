<?php

include 'get_shop_data';

function add_article_admin($name, $price, $img, $tag)
{
	echo "IM HERE";
	$data = get_shop_data();
	$tag = explode(',', $tag);
	if (!$data[$name])
	{
		$data[$name] = array("name" => $name, "price" => $price, "img" => $img, "tag" => $tag);
		return (1);
	}
	else
		return (0);
	$data = serialize($data);
	put_shop_data($data);
}

?>
