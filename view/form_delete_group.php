<?php
include_once("view/cerrar.php");

echo "<h2>ELIMINAR GRUPS</h2>";
$resultat= shell_exec("sudo ./listar_grupos.sh");

 echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'><table>";
 echo '<tr><td><pre>'. $resultat.'</pre></td></tr>';
 echo "</table>";
 echo "</form>";
?>
<html>
	<head>
	<title>ELIMINAR GRUPS</title>
	</head>
	<body>
		<?php
		echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
		?>
		
		Quin grup vols esborrar?  <input type="text" name="group">
		<br><br>
		<input type="submit" name='deletegr' value="ELIMINAR">
		
               </form>
  
	</body>
</html>