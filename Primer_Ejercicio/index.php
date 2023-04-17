<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Acceso a la Facultad</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Facultad de Ciencias Puras y Naturales</h1>
	</header>

	<main>
		<?php
			if(isset($_GET['page']))
			{
				$page = $_GET['page'];
			// Como tal no se incluye lo que hata en la variable $page ya que como consecuencia
			// volvemos esta inclusion en un vector de ataque del tipo Local File Inclusion (LFI)
			// o como tambien un Remote File Inclusion (RFI)
			if($page == "fisica") 
				include "fisica.php";
			else if($page == "quimica")
				include "quimica.php";
			else if($page == "matematica")
				include "matematica.php";
			else if($page == "informatica")
				include "informatica.php";
				
			}
			include "main.php";
		?>
	</main>

	<?php include "footer.php"; ?>
</body>
</html>
