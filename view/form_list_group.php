<?php
include_once("view/cerrar.php");
?>
<html>
	<head>
	<title>LLISTAR GRUPS</title>
	</head>
	<body>
		<h2>LLISTA D' USUARIS</h2>
			<?php
			$resultat= shell_exec("sudo ./listar_grupos.sh");

			echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'><table>";
			echo '<tr><td><pre>'. $resultat.'</pre></td></tr>';
			echo "</table>";
			echo "</form>";
			?>
	</body>
</html>