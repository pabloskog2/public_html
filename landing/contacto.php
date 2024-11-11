<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Colores de Barﾃｳn</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<?php include 'include/nav.php' ?>
	<section class="jumbotron" style="background: url('img/estilo-de-vida-2.jpg') !important; background-size: cover !important;
	background-position: center !important;
	background-repeat: no-repeat !important;">
		<div class="container">
			<img src="img/HEADER.svg" alt="" class="llamado">
		</div>
	</section>
	<div class="white text-center curba">
		<div class="container-xs">
			<h1>¡CONTÁCTANOS HOY!</h1><br>
<p>Llena este formulario para resolver dudas y poder ayudarte.
</p><br>
<form action="resultado_contacto.php" method="POST">
  <div class="form-group">
    <input type="text" class="form-control" id="elnombre" placeholder="Nombre" required maxlength="140" name="minombre">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="elmail" placeholder="Correo" required maxlength="140" name="miemail">
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="eltelefono" placeholder="Teléfono" required maxlength="15" name="mitelefono">
  </div>
  <div class="form-group">
    
    <textarea  id="elmensaje" cols="20" rows="3" class="form-control" id="elmensaje" placeholder="Mensaje" required maxlength="500" name="mimensaje"></textarea>
  </div>
 

  <button type="submit" class="btn-red" onclick="checker()">Enviar</button>
</form>
		</div>
	</div>


<script>
    function checker() {
        var elnom = document.getElementById("elnombre");
        var elma = document.getElementById("elmail");
        var eltel = document.getElementById("eltelefono");
        var elmen = document.getElementById("elmensaje");
        
        var mensaj = "Debes rellenar todos los parámetros antes de enviar. Debes rellenar:\n";
        
        if(elnom.value == ""){
            mensaj = mensaj + "- Nombre\n";
        }
        if(elma.value == ""){
            mensaj = mensaj + "- Email\n";
        }
        if(eltel.value == ""){
            mensaj = mensaj + "- Telefono\n";
        }
        if(elmen.value == ""){
            mensaj = mensaj + "- Mensaje\n";
        }
        
        if (elnom.value == "" || elma.value == "" || eltel.value == "" || elmen.value == ""){
            alert(mensaj);
        }
        
    }
</script>


<div class="white" style="padding: 0;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.6175625523965!2d-71.6039135848113!3d-33.040204680893375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e0c8d425eca9%3A0x713c2197cece45a5!2sTocornal%20125%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1624477368007!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>



	<?php include 'include/footer.php' ?>	
</body>
</html>