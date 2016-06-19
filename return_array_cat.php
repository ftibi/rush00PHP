<?php
function return_array_cat()
{
	$i = 0;
	$data = unserializedb("./private/shopdb");
	$array_cat = array();
	foreach($data as $elem)
	{
		foreach($elem[tag] as $value)
		{
			if (array_search($value, $array_cat) === FALSE)
				{
					$array_cat[$i] = $value;
					$i += 1;
				}
		}
	}
	return $array_cat;
}
?>
