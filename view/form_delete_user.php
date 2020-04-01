<?php
include_once("view/cerrar.php");

echo "<h2>ELIMINAR USUARIS</h2>";
$resultat= shell_exec("sudo ./listar_usuarios.sh");
echo "<pre>". $resultat."</pre>";
?>

<html>
<head>
<title>ELIMINAR USUARIS</title>
</head>
	<body>
		<?php
		echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
		?>
	
		Quin usuari vols esborrar?  <input type="text" name="user">
		<br><br>
		<input type="submit" name='eliminar' value="ELIMINAR">
	
      		</form>
	</body>
</html>