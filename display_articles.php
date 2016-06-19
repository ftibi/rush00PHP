<?php
function display_articles()
{
	$filename = "./private/shopdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);
	// print_r($data);
	foreach ($data as $elem)
	{
		echo "<div class=onearticle>
<img class=galery_img src=$elem[img] />
<form action=add_article.php method=POST >
<p>$elem[name] : $elem[price]$</p>
ajouter<br/><input type=submit name=article value=$elem[name]><br/>au panier
</form>
</div>
";
	}
}
?>
