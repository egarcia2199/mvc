<?php
include_once("view/cerrar.php");
?>

<html>
	<head>
	<title>LLISTAR USUARIS</title>
	</head>
	<body>
		<h2>LLISTA D' USUARIS</h2>

		<?php
		$resultat= shell_exec("sudo ./listar_usuarios.sh");

		echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
		echo "<table>";
		echo '<tr><td><pre>'. $resultat.'</pre></td></tr>';
		echo "</table>";
		echo "</form>";

		echo "S' han desat tots els usuaris al fitxer users.txt"
		?>
	</body>
</html>
