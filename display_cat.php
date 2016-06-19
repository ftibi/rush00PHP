<?php

function display_cat()
{
	$filename = "./private/shopdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);
	$category = array("vetements", "accessoires", "bijoux");
	// print_r($data);
	echo "<h2>Boutique</h2>
		<h3>category:</h3>";
echo "<div class=top>";
foreach ($category as $type)
{
	echo"<form class=formcat action=affiche_cat.php method=POST>
	<input type=submit name=category value=$type>
</form>";
}
echo "</div>";

			if ($_SESSION[cat])
			{
			foreach ($data as $elem)
			{
				if (array_search($_SESSION[cat], $elem[tag]) !== FALSE)
						echo "<div class=onearticle>
						<p>$elem[name] : $elem[price]$</p>
						<img class=galery_img src=$elem[img] />
						<form action=add_article.php method=POST >
						ajouter<br/>
						<input type=submit name=article value=$elem[name]><br/>au panier
						</form></div>
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
