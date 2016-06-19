<?php
function del_article_admin($item)
{
	$shopdata = get_shop_data();
	// foreach ($shopdata as $key => $val)
	// {
	// 	if ($val == $item)
	// }
	unset($shopdata[$item]);
	put_shop_data($shopdata);
}

?>
