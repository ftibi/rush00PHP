<?php
//pas le droit d'utiliser session ? il va faloir nettoyer le cookie avec request!
session_start();
unset($_SESSION["logged_on_user"]);
header("refresh: 1;url=index.php");
echo"
<p>
	Deconnexion
</p>
";
?>
