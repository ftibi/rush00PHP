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

<!--


<div class="list_article">
<div id="article_tshirt">
<form action="add_article.php" method="POST" >
<img id="tshirt" alt="tshiry" title="tshirt" src="img/tshirt.jpg">
<input type="submit" name="article" value="tshirt">
</form>

<div id="article_tshirt">
<form action="add_article.php" method="POST" >
<img id="tshirt" alt="tshiry" title="tshirt" src="img/tshirt.jpg">
<input type="submit" name="name" value="OK">
</form>


</div>

</div> -->
