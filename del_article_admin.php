<?php

function del_article_admin($item)
{
	$shopdata = get_shop_data();
	unset($shopdata[$item]);
	put_shop_data($shopdata);
}

?>
