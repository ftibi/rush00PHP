<?php

include 'get_usr_data.php';
include 'del_article_panier.php';

session_start();
$data = get_usr_data();
$panier = $data[$_SESSION[logged_on_user]][panier];
print_r($panier);
print_r($_POST);

?>


<html>
<header>
	<title>Panier</title>
	<link rel="stylesheet" href="index.css">
	<meta charset="UTF-8">
</header>
<h1> Votre panier </h1>

<form action=page_panier.php method=post>
<?php
echo"<ul>";
	foreach($panier as $item)
	{
		echo "<li class=usr><input type=checkbox name=$item[name] value=del> $item[name] : $item[quantity] : $item[price]</li>";
	}
echo"</ul>";
?>
<input type=submit value=effacer />
</form>

</html>
