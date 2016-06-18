<?php

include 'get_usr_data.php';

session_start();
$data = get_usr_data();
$panier = $data[$_SESSION[logged_on_user]][panier];
print_r($panier);

?>


<html>

<h1> Votre panier </h1>
<?php
echo"<ul>";
	foreach($panier as $item)
	{
		echo "<li> $item[name] : $item[quantity] : $item[price]</li>";
	}
echo"</ul>";

?>

</html>
