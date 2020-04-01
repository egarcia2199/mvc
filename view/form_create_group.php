<?php
include_once("view/cerrar.php");
?>

<html>
	<head>
	<title>CREAR GRUPS</title>
	</head>
	<body>
		<h2>CREACIÓ DE GRUPS</h2>
			<?php
			echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
			?>
				<table>
					<tr>
					<th>Nom del grup:</th>
					<td><input type="text" name="group"></td>
					</tr>
					<tr>
					<td></td><td><input type="submit" name='creategr' value="CREAR"></td>
					</tr>
				</table>
			</form>
	</body>
</html>