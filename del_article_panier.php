<?php

include 'get_usr_data.php';

function del_article_panier($login, $article)
{
	$data = get_usr_data($login);
	if ($data[$login][panier][$article])
		unset($data[$login][panier][$article]);
	put_usr_data($data);
}



?>
