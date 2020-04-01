<?php
include_once("view/cerrar.php");
?>

<html>
	<head>
	<title>CREACIÓ D'USUARIS</title>
	</head>
	<body>
		<?php
		echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
		?>
		
		<h2>CREACIÓ D'USUARIS</h2>
		
		USER:  <input type="text" name="username">
		<br><br>
		PASSWORD:  <input type="password" name="passw">
		<br><br>
		GROUP:  <input type="text" name="groupname">
		<br><br>
		FOLDER:  <input type="text" name="folder">
		<br><br>
		DEPARTMENT:  <input type="text" name="department">
		<br><br>  
		<input type="submit" name='create' value="CREAR">
		
               </form>
	</body>
</html>