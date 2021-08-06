<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DESCARGAR</title>
	<link rel="stylesheet" href="CSS/style_sheet.css">
</head>
<body>
	<header>
		<h1>Archivo descargado <?php echo $_GET['file']?></h1>
	</header>
	<div style="color: white;">
			<?php 
				require 'funcionesFTP.php';

				descargarFile($_GET['file']);
			?>

		</form>
	</div>
</body>
</html>