<html>
	<head>
	<title>MENÚ PRINCIPAL</title>
	</head>
	<body>
		<h2>MENÚ PRINCIPAL</h2>
		<?php
		echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
		?>

		 <input type="radio" name="option" value="create">Crear Usuaris<br>
		 <input type="radio" name="option" value="list">Llistar Usuaris<br>
		 <input type="radio" name="option" value="delete">Eliminar Usuaris<br>

		 <input type="radio" name="option" value="creategr">Crear Grups<br>
		 <input type="radio" name="option" value="listgr">Llistar Grups<br>
		 <input type="radio" name="option" value="deletegr">Eliminar Grups<br><br>

		 <input type="submit" name="submit" value="ACCEPTAR">

		</form>
	</body>
</html>