<?php
function display_cat()
{
	$filename = "./private/shopdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);
	// print_r($data);
	echo "<h3>Boutique</h3>
	<p>vetements<p>";
//
// 	<form action='login.php' method='post'>
// 		<input type='submit' name='submit' value='OK' /></p>
// 	</form>
// ​
	foreach ($data as $elem)
	{
		if ($elem[tag] == 'vetements')
		echo "<p>$elem[name] : $elem[price]$</p
		><img class=galery_img src=$elem[img] />
		<input type=submit name=article value=tshirt>";
	}
	echo"<p>accessoires<p>";
	foreach ($data as $elem)
	{
		if ($elem[tag] == 'accessoires')
		echo "
<p>$elem[name] : $elem[price]$</p>
<img class=galery_img src=$elem[img] />
<input type=submit name=article value=montre>
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
