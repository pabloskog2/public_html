<?php
session_start();
require_once("root_adm/adm_R.php");
require_once("validador/fx.php");
	
	
if ($_POST['minombre'] == "" || $_POST['miemail'] == "" || $_POST['mitelefono'] == "" || $_POST['mimensaje'] =="") {
    
}
else if ($_POST['minombre'] != "" && $_POST['miemail'] != "" && $_POST['mitelefono'] != ""  && $_POST['mimensaje'] !="") {
    
envio_contacto($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Colores de Barón</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<?php include 'include/nav.php' ?>
	
	<div class="white text-center curba">
		<div class="container-xs">
			<h1>Gracias por contactarnos!</h1><br>
<p>Pronto nos comunicaremos contigo.
</p><br>

		</div>
	</div>





<div class="white" style="padding: 0;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.6175625523965!2d-71.6039135848113!3d-33.040204680893375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e0c8d425eca9%3A0x713c2197cece45a5!2sTocornal%20125%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1624477368007!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>



	<?php include 'include/footer.php' ?>	
</body>
</html>

<?php
}

?>