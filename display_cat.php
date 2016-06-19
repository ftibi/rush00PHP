<?php

function display_cat()
{
	$filename = "./private/shopdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);
	$category = array("vetements", "accessoires", "bijoux");
	// print_r($data);
	echo "<h3>Boutique</h3>";
	//
	// <form action='login.php' method='post'>
	// 	<input type='submit' name='name' value='OK' /></p>
	// </form>

foreach ($category as $type)
{
	echo"<form action=affiche_cat.php method=POST>
	<p>$type<p>
	<input type=submit name=category value=$type>
</form>";
}

			if ($_SESSION[cat])
			{
			foreach ($data as $elem)
			{
				if (array_search($_SESSION[cat], $elem[tag]) !== FALSE)
						echo "
						<form action=add_article.php method=POST >
						<p>$elem[name] : $elem[price]$</p>
						<img class=galery_img src=$elem[img] />
						<input type=submit name=article value=$elem[name]>
						</form>
						";
			}
		}


	// echo"<p>accessoires<p>";
	// foreach ($data as $elem)
	// {
	// 	print_r($elem[tag]);
	// 	if (array_search("bijoux", $elem[tag]) !== FALSE)
	// 			echo "
	// 			<form action=add_article.php method=POST >
	// 			<p>$elem[name] : $elem[price]$</p>
	// 			<img class=galery_img src=$elem[img] />
	// 			<input type=submit name=article value=$elem[name]>
	// 			</form>
	// 			";
	//
	//
	// }
}
// foreach ($data as $elem)
// {
// 	print_r($elem[tag]);
// 	if (array_search("vetements", $elem[tag]) !== FALSE)
// 			echo "
// 			<form action=add_article.php method=POST >
// 			<p>$elem[name] : $elem[price]$</p>
// 			<img class=galery_img src=$elem[img] />
// 			<input type=submit name=article value=$elem[name]>
// 			</form>
// 			";
//
// }
?>
