<?php

function display_cat()
{
	$filename = "./private/shopdb";
	$data = file_get_contents($filename);
	$data = unserialize($data);
	$category = array("vetements", "accessoires", "bijoux");
	// print_r($data);
	echo "<h3>Boutique</h3>
	<p>vetements<p>";
	//
	// <form action='login.php' method='post'>
	// 	<input type='submit' name='submit' value='OK' /></p>
	// </form>

			foreach ($data as $elem)
			{
				print_r($elem[tag]);
				if (array_search("bijoux", $elem[tag]) != FALSE)
						echo "
						<p>$elem[name] : $elem[price]$</p>
						<img class=galery_img src=$elem[img] />
						<input type=submit name=article value=tshirt>
						";

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
