<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Colores de Barón</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/lightbox.css">
</head>
<body>
	<?php include 'include/nav.php' ?>
	<!--<section class="jumbotron" style="background: url('img/01_Cocina-Final.jpg') !important; background-size: cover !important;
	background-position: center !important;
	background-repeat: no-repeat !important;">
		<div class="container">
			<img src="img/HEADER.svg" alt="" class="llamado">
		</div>
	</section>-->
<section class="jumbotron" style="background: url('img/fachada-aerea-2021_V2_CC.jpg') !important; background-size: cover !important;
  background-position: center !important;
  background-repeat: no-repeat !important;">
    <div class="container">
      <img src="img/HEADER.svg" alt="" class="llamado">
      <a href="#deptos"  class="anchorLink2 callto btn-red" data-atr="deptos" title="bajar">COTIZAR</a>




    </div>
  </section>
    <div class="white text-center curba">
    <div class="container-xs">
      <h1><b>Arquitectura consciente</b> para un nuevo Valparaíso
</h1><br>
<p>Te proponemos reconectar con lo que realmente importa en la vida, y volver a conectar con lo esencial.</p>
<p>Te invitamos a ser parte de un estilo de vida minimalista y co-housing, donde la importancia reside en las experiencias y las personas con quienes compartir en espacios comunes, mientras tu hogar se transforma en un refugio para inspirarte y disfrutar lo que realmente tiene valor en tu vida.
</p><br>
  <a href="#deptos"  class="anchorLink2  btn-red" data-atr="deptos" title="bajar">Ver Departamentos</a>
    </div>
  </div>
	<div class="white text-center" id="deptos">
		<div class="container-fluid">
			<div class="col-md-12">
				<h1>

<b>Cotiza tu departamento</b> por orientación y piso <br>
         </h1><br>
			</div>
			<div class="col-md-3 text-center plantas">
<a class="example-image-link" href="img/05_Planta-Final-Depto3-Tocornal.jpg" data-lightbox="example-set2" >

				<img src="img/05_Planta-Final-Depto3-Tocornal.jpg" alt="" class="img-responsive"></a>
				<h1>TIPO A</h1>
				<p>SUPERFICIE TOTAL 29,09 M2</p>
				<p>INCLUYE TERRAZA</p>
				
				  <button type="button" class="btn-red" data-toggle="modal" data-target="#myModal" onclick="tipoinfo(1, 'TIPO A', 'img/05_Planta-Final-Depto3-Tocornal.jpg')">Cotizar</button>

			</div>
			<div class="col-md-3 text-center plantas">
				<a class="example-image-link" href="img/05_Planta-Final-Depto-Tocornal.jpg" data-lightbox="example-set2" >
				<img src="img/05_Planta-Final-Depto-Tocornal.jpg" alt="" class="img-responsive"></a>
				<h1>TIPO B</h1>
				<p>SUPERFICIE TOTAL 33,6 M2</p>
				<p>INCLUYE TERRAZA</p>
				
				<button type="button" class="btn-red" data-toggle="modal" data-target="#myModal2" onclick="tipoinfo(2, 'TIPO B', 'img/05_Planta-Final-Depto-Tocornal.jpg')">Cotizar</button>
			</div>
			<div class="col-md-3 text-center plantas">
				<a class="example-image-link" href="img/05_Planta-Final-Depto2-Tocornal.jpg" data-lightbox="example-set2" >
				<img src="img/05_Planta-Final-Depto2-Tocornal.jpg" alt="" class="img-responsive"></a>
				<h1>TIPO C</h1>
				<p>SUPERFICIE TOTAL 47,47 M2</p>
				<p>TERRAZA PANORAMICA: 14,86</p>
			<button type="button" class="btn-red" data-toggle="modal" data-target="#myModal3" onclick="tipoinfo(3, 'TIPO C', 'img/05_Planta-Final-Depto2-Tocornal.jpg')">Cotizar</button>
			</div>
     
     
      <div class="col-md-3 text-center plantas">
        <a class="example-image-link" href="img/tipod.jpg" data-lightbox="example-set2" >
        <img src="img/tipod.jpg" alt="" class="img-responsive"></a>
        <h1>TIPO D</h1>
        <p>SUPERFICIE TOTAL 28,133 M2</p>
        <p style="color: white;">.</p>
        <!--
      <button type="button" class="btn-red" data-toggle="modal" data-target="#myModal4" onclick="tipoinfo(3, 'TIPO C', 'img/tipod.jpg')">Cotizar</button>
       -->
      </div> 
      
     
		</div>
	</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body modal-lg">
         <div class="col-md-5">
         	<img id="implanta" src="img/05_Planta-Final-Depto3-Tocornal.jpg" alt="" class="img-responsive">
         </div>
         <div class="col-md-7">
         	<h1 id="titform">TIPO A</h1>
         	<form action="resultado_cotizacion.php" method="POST">
  <div class="form-group">
      <input type="hidden" value="1" name="of_1" required>
      <input type="hidden" value="1" name="numero" required>
    <input type="text" class="form-control" id="nombredf1" placeholder="Nombre Completo" onchange="corrigenombre()" onclick="focusnombre()" maxlength="100" required name="nombre">
    <div id="mnombredf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;"><i>Ingresa un nombre</i></div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="correodf1" placeholder="Email" onclick="focuscorreo()" maxlength="100" required  name="email">
    <div id="mcorreodf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un email</i></div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="rutdf1" placeholder="Rut" oninput="checkRut(this)" onclick="focusrut()" maxlength="13" required  name="rut">
    <div id="mrutdf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un rut válido</i></div>
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="teldf1" placeholder="Teléfono" onclick="focustelefono()" maxlength="100" onkeypress='validate(event)' maxlength="12" required  name="fono">
    <div id="mteldf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un teléfono</i></div>
  </div>
  

 

  <button type="submit" onclick="checker1()" class="btn-red" >Enviar</button>
</form>
         </div>



        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  
  
  
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body modal-lg">
         <div class="col-md-5">
         	<img id="implanta" src="img/05_Planta-Final-Depto-Tocornal.jpg" alt="" class="img-responsive">
         </div>
         <div class="col-md-7">
         	<h1 id="titform">TIPO B</h1>
         	<form action="resultado_cotizacion.php" method="POST">
  <div class="form-group">
      <input type="hidden" value="1" name="of_2" required>
      <input type="hidden" value="2" name="numero" required>
    <input type="text" class="form-control" id="nombredf2" placeholder="Nombre Completo" onchange="corrigenombre()" onclick="focusnombre()" maxlength="100" required  name="nombre">
    <div id="mnombredf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;"><i>Ingresa un nombre</i></div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="correodf2" placeholder="Email" onclick="focuscorreo()" maxlength="100" required  name="email">
    <div id="mcorreodf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un email</i></div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="rutdf2" placeholder="Rut" oninput="checkRut(this)" onclick="focusrut()" maxlength="10" required  name="rut">
    <div id="mrutdf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un rut válido</i></div>
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="teldf2" placeholder="Teléfono" onclick="focustelefono()" maxlength="100" onkeypress='validate(event)' maxlength="12" required  name="fono">
    <div id="mteldf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un teléfono</i></div>
  </div>
  

 

  <button type="submit" onclick="checker2()" class="btn-red" >Enviar</button>
</form>
         </div>



        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body modal-lg">
         <div class="col-md-5">
         	<img id="implanta" src="img/05_Planta-Final-Depto2-Tocornal.jpg" alt="" class="img-responsive">
         </div>
         <div class="col-md-7">
         	<h1 id="titform">TIPO C</h1>
         	<form action="resultado_cotizacion.php" method="POST">
  <div class="form-group">
      <input type="hidden" value="1" name="of_3" required>
      <input type="hidden" value="3" name="numero" required>
    <input type="text" class="form-control" id="nombredf3" placeholder="Nombre Completo" onchange="corrigenombre()" onclick="focusnombre()" maxlength="100" required  name="nombre">
    <div id="mnombredf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;"><i>Ingresa un nombre</i></div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="correodf3" placeholder="Email" onclick="focuscorreo()" maxlength="100" required  name="email">
    <div id="mcorreodf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un email</i></div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="rutdf3" placeholder="Rut" oninput="checkRut(this)" onclick="focusrut()" maxlength="10" required  name="rut">
    <div id="mrutdf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un rut válido</i></div>
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="teldf3" placeholder="Teléfono" onclick="focustelefono()" maxlength="100" onkeypress='validate(event)' maxlength="12" required  name="fono">
    <div id="mteldf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un teléfono</i></div>
  </div>
  

 

  <button type="submit" onclick="checker3()" class="btn-red" >Enviar</button>
</form>
         </div>



        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>


  
  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body modal-lg">
         <div class="col-md-5">
          <img id="implanta" src="img/tipod.jpg" alt="" class="img-responsive">
         </div>
         <div class="col-md-7">
          <h1 id="titform">TIPO D</h1>
          <form action="resultado_cotizacion.php" method="POST">
  <div class="form-group">
      <input type="hidden" value="1" name="of_4" required>
      <input type="hidden" value="4" name="numero" required>
    <input type="text" class="form-control" id="nombredf4" placeholder="Nombre Completo" onchange="corrigenombre()" onclick="focusnombre()" maxlength="100" required  name="nombre">
    <div id="mnombredf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;"><i>Ingresa un nombre</i></div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="correodf4" placeholder="Email" onclick="focuscorreo()" maxlength="100" required  name="email">
    <div id="mcorreodf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un email</i></div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="rutdf4" placeholder="Rut" oninput="checkRut(this)" onclick="focusrut()" maxlength="10" required  name="rut">
    <div id="mrutdf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un rut válido</i></div>
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="teldf4" placeholder="Teléfono" onclick="focustelefono()" maxlength="100" onkeypress='validate(event)' maxlength="12" required  name="fono">
    <div id="mteldf" style="font-weight:500;color:#ef8787;display:none;position:absolute;margin-top:-4px;" ><i>Ingresa un teléfono</i></div>
  </div>
  

 

  <button type="submit" onclick="checker4()" class="btn-red" >Enviar</button>
</form>
         </div>



        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>

<div class="white" style="padding: 0;">
<div class="container text-center">
  <h1><b>CONOCE NUESTRO TOUR VIRTUAL</b></h1><br><br>
  <iframe src="http://laboratorioradical.cl/colorbaron/Piloto%20360%C2%BA%20Edificio%20Tocornal/app-files/index.html" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br><br>
</div>
</div>
	
<div class="white icons">
	<div class="container">
		<div class="five text-center">
			<img src="img/terminaciones.jpg" alt="" class="img-responsive">
			<h4>Terminaciones de <br> alta durabilidad</h4>
		</div>
		<div class="five text-center">
			<img src="img/colores.jpg" alt="" class="img-responsive">
			<h4>Colores acorde a un <br>estilo cotemporáneo</h4>
		</div>
		<div class="five text-center">
			<img src="img/piso-ceramico.jpg" alt="" class="img-responsive">
			<h4>Baños con piso <br>cerámico</h4>
		</div>
		<div class="five text-center">
			<img src="img/ventanas-pvc.jpg" alt="" class="img-responsive">
			<h4>Ventanas <br>PVC </h4>
		</div>
		<div class="five text-center">
			<img src="img/piso-vinilico.jpg" alt="" class="img-responsive">
			<h4>Piso <br> vinilico</h4>
		</div>
	</div>
</div>


<!--<div class="jumbotron separa" style="background: url('img/01_Cocina-Final.jpg') !important; background-size: cover !important;
  background-position: center !important;
  background-repeat: no-repeat !important; background-attachment: fixed !important;">
    <div class="container-xs">
      <img src="img/PARALAX.svg" alt="" class="img-responsive">
    </div>
  </div>-->






<div class="white " style="padding-top: 2px; padding-bottom: 0 !important;">
	<div class="container-fluid">
	<div class="row">
		<!--<div class="col-md-12 text-center">
			<h1>Galería</h1><br>
		</div>-->

		<a class="col-md-4 col-xs-12 galeria example-image-link" href="img/01_Cocina-Final.jpg" data-lightbox="example-set2" data-title="" style="background: url('img/01_Cocina-Final.jpg') !important; background-size: cover !important;
  background-repeat: no-repeat !important;
  background-position: center !important;"></a>
		<a class="col-md-4 col-xs-12 galeria example-image-link" href="img/02_Dormitorio-Final.jpg" data-lightbox="example-set2" data-title="" style="background: url('img/02_Dormitorio-Final.jpg') !important; background-size: cover !important;
  background-repeat: no-repeat !important;
  background-position: center !important;"></a>
		<a class="col-md-4 col-xs-12 galeria example-image-link" href="img/Tocornal-Hall-2021_aco.jpg" data-lightbox="example-set2" data-title="" style="background: url('img/Tocornal-Hall-2021_aco.jpg') !important; background-size: cover !important;
  background-repeat: no-repeat !important;
  background-position: center !important;"></a>
		<a class="col-md-4 col-xs-12 galeria example-image-link" href="img/tocornal_peaton-2021_V2_CC_aco.jpg" data-lightbox="example-set2" data-title="" style="background: url('img/tocornal_peaton-2021_V2_CC_aco.jpg') !important; background-size: cover !important;
  background-repeat: no-repeat !important;
  background-position: center !important;"></a>
		<a class="col-md-4 col-xs-12 galeria example-image-link" href="img/tocornal-2021_fachada_CC_aco.jpg" data-lightbox="example-set2" data-title="" style="background: url('img/tocornal-2021_fachada_CC_aco.jpg') !important; background-size: cover !important;
  background-repeat: no-repeat !important;
  background-position: center !important;"></a>
		<a class="col-md-4 col-xs-12 galeria example-image-link" href="img/fachada-aerea-2021_V2_CC.jpg" data-lightbox="example-set2" data-title="" style="background: url('img/fachada-aerea-2021_V2_CC.jpg') !important; background-size: cover !important;
  background-repeat: no-repeat !important;
  background-position: center !important;"></a>





	<!-- 	<div class="col-md-4 galeria" style="background: url('img/01_Cocina-Final.jpg')">
			
		</div>
		<div class="col-md-4 galeria" style="background: url('img/02_Dormitorio-Final.jpg')">
			
		</div>
		<div class="col-md-4 galeria" style="background: url('img/Tocornal-Hall-2021_aco.jpg')">
			
		</div>
		<div class="col-md-4 galeria" style="background: url('img/tocornal_peaton-2021_V2_CC_aco.jpg')">
			
		</div>
		<div class="col-md-4 galeria" style="background: url('img/tocornal-2021_fachada_CC_aco.jpg')">
			
		</div>
		<div class="col-md-4 galeria" style="background: url('img/fachada-aerea-2021_V2_CC.jpg')">
		
		</div> -->
	</div>
	</div>
</div>
<div class="white" style="padding: 0;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.6175625523965!2d-71.6039135848113!3d-33.040204680893375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689e0c8d425eca9%3A0x713c2197cece45a5!2sTocornal%20125%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1624477368007!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="white" style="padding: 0;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3" style="padding: 0;">
      <div class="height-xl" style="background: url('img/27082824122_d61f5f37be_o.jpg')"></div>
      </div>
      <div class="col-md-9" style="padding: 0;">
      <div class="col-md-6 height-xs" style="background: url('img/36075177092_202a026dd9_k.jpg')">
        
      </div>
      <div class="col-md-6 height-xs" style="background: url('img/27693142926_a3edd568eb_k.jpg')">
        
      </div>
      <div class="col-md-4 height-xs" style="background: url('img/9886456675_96ca270b2a_o.jpg')">
        
      </div>
      <div class="col-md-8 listado-pasos">
        <div class="col-md-12 ">
          <h1>A pasos de :</h1><br>
        </div>
        <div class="col-md-6">
          <ul>
            <li>· Ruta 68</li>
            <li>· Congreso Valparaiso</li>
            <li>· Av. España</li>
            <li>· Universidades y Centros de estudios</li>
            <li>· Rápido acceso a Vina del Mar</li>
            <li>· Av. Portales</li>
            <li>· Locomoción colectiva</li>
            <li>· Ascensor patrimonial</li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul>
            <li>· Mirador turístico</li>
            <li>· Canchas de barrio</li>
            <li>· Supermercado Jumbo</li>
            <li>· Minimarkets de barrio</li>
            <li>· Farmacias</li>
            <li>· Botillería</li>
            <li>· Panadería tradicional</li>
            <li>· Cafeterías y/o restaurantes de barrio</li>
          </ul>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>




<div class="white text-center curba">
    <div class="container-xs">
      <h1>¡CONTÁCTANOS HOY!</h1><br>
<p>Llena este formulario para resolver dudas y poder ayudarte.
</p><br>
<form action="resultado_contacto.php" method="POST">
  <div class="form-group">
    <input type="text" class="form-control" id="elnombre" placeholder="Nombre" required="" maxlength="140" name="minombre">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="elmail" placeholder="Correo" required="" maxlength="140" name="miemail">
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="eltelefono" placeholder="Teléfono" required="" maxlength="15" name="mitelefono">
  </div>
  <div class="form-group">
    
    <textarea id="elmensaje" cols="20" rows="3" class="form-control" placeholder="Mensaje" required="" maxlength="500" name="mimensaje"></textarea>
  </div>
 

  <button type="submit" class="btn-red" onclick="checker()">Enviar</button>
</form>
    </div>
  </div>




	<?php include 'include/footer.php' ?>
	
	<script>
    function checker1() {
        var elnom = document.getElementById("nombredf1");
        var elma = document.getElementById("correodf1");
        var eltel = document.getElementById("teldf1");
        var elru = document.getElementById("rutdf1");
        
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
        if(elru.value == ""){
            mensaj = mensaj + "- RUT\n";
        }
        
        if (elnom.value == "" || elma.value == "" || eltel.value == "" || elru.value == ""){
            alert(mensaj);
        }
        
    }
    
    function checker2() {
        var elnom = document.getElementById("nombredf2");
        var elma = document.getElementById("correodf2");
        var eltel = document.getElementById("teldf2");
        var elru = document.getElementById("rutdf2");
        
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
        if(elru.value == ""){
            mensaj = mensaj + "- RUT\n";
        }
        
        if (elnom.value == "" || elma.value == "" || eltel.value == "" || elru.value == ""){
            alert(mensaj);
        }
        
    }
    
    function checker3() {
        var elnom = document.getElementById("nombredf3");
        var elma = document.getElementById("correodf3");
        var eltel = document.getElementById("teldf3");
        var elru = document.getElementById("rutdf3");
        
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
        if(elru.value == ""){
            mensaj = mensaj + "- RUT\n";
        }
        
        if (elnom.value == "" || elma.value == "" || eltel.value == "" || elru.value == ""){
            alert(mensaj);
        }
        
    }
    
    function checker4() {
        var elnom = document.getElementById("nombredf4");
        var elma = document.getElementById("correodf4");
        var eltel = document.getElementById("teldf4");
        var elru = document.getElementById("rutdf4");
        
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
        if(elru.value == ""){
            mensaj = mensaj + "- RUT\n";
        }
        
        if (elnom.value == "" || elma.value == "" || eltel.value == "" || elru.value == ""){
            alert(mensaj);
        }
        
    }
</script>
	
	<script>
	
	var mitipo = "";
	var minum = 0;
	var miplant = "";
	
	function tipoinfo(num, tipo, planta) {
	    minum = num;
	    mitipo = tipo;
	    document.getElementById("titform").innerHTML = mitipo;
	    document.getElementById("implanta").src = planta;
	}
	
	
	     function focusnombre() {
	
        document.getElementById("nombredf").setAttribute('style', 'border-bottom-color: #15576a !important');
          document.getElementById("mnombredf").style.display = "none";
    }
    
    function focuscorreo() {
        document.getElementById("correodf").setAttribute('style', 'border-bottom-color: #15576a !important');
            document.getElementById("mcorreodf").style.display = "none";
    }
    function focusrut() {
        document.getElementById("rutdf").setAttribute('style', 'border-bottom-color: #15576a !important');
            document.getElementById("mrutdf").style.display = "none";
    }
    function focustelefono() {
        document.getElementById("teldf").setAttribute('style', 'border-bottom-color: #15576a !important');
        document.getElementById("mteldf").style.display = "none";
    }
    function focusasunto() {
        document.getElementById("asuntodf").setAttribute('style', 'border-bottom-color: #15576a !important');
        document.getElementById("masuntodf").style.display = "none";
    }
    function focusmensaje() {
        document.getElementById("mensajedf").setAttribute('style', 'border-bottom-color: #15576a !important');
        document.getElementById("mmensajedf").style.display = "none";
    }
    
    function focuscaptcha() {
        document.getElementById("txtInput").setAttribute('style', 'border-bottom-color: #15576a !important');
        document.getElementById("mcaptchadf").style.display = "none";
    }
    
    function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
    
    function validateNumber(evt) {
      var theEvent = evt || window.event;
    
      // Handle paste
      if (theEvent.type === 'paste') {
          key = event.clipboardData.getData('text/plain');
      } else {
      // Handle key press
          var key = theEvent.keyCode || theEvent.which;
          key = String.fromCharCode(key);
      }
      var regex = /[0-9,+]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }
    
    function corrigenombre() {
       
        var nombre = document.getElementById("nombredf");
        
        nombre.value = capitalize(nombre.value);
    }
    
    
    
    function finalcheck() {
       
      var llae = "";
          
      var nombre_df = document.getElementById("nombredf");
      var correo_df = document.getElementById("correodf");
      var rut_df = document.getElementById("rutdf");
      var telefono_df = document.getElementById("teldf");
      
     
      
     
      
      if(nombre_df.value.length <=0){
          nombre_df.setAttribute('style', 'border-bottom-color: #ef8787 !important');
          document.getElementById("mnombredf").style.display = "block";
          
           //alert("Nombre no válido, ingresa uno auténtico.");
      }
      else {
          llae += "c";
      }
      
     
      if(validateEmail(correo_df.value) == false){
         //alert("Coloca un correo válido");
         correo_df.setAttribute('style', 'border-bottom-color: #ef8787 !important');
            document.getElementById("mcorreodf").style.display = "block";
     }
     else {
          llae += "n";
      }
     
      if(rut_df.value.length ==0){
         //alert("Ingresa un numero telefónico válido.");
         rut_df.setAttribute('style', 'border-bottom-color: #ef8787 !important');
            document.getElementById("mrutdf").style.display = "block";
     }
     else {
          llae += "o";
      }
      
      if(telefono_df.value.length ==0){
         //alert("Ingresa un numero telefónico válido.");
         telefono_df.setAttribute('style', 'border-bottom-color: #ef8787 !important');
            document.getElementById("mteldf").style.display = "block";
     }
     else {
          llae += "p";
      }
      
      
     
     if(llae == "cnop") {
         
         nombre_df.setAttribute('style', 'border-bottom-color: #15576a !important');
          document.getElementById("mnombredf").style.display = "none";
         correo_df.setAttribute('style', 'border-bottom-color: #15576a !important');
            document.getElementById("mcorreodf").style.display = "none";
         rut_df.setAttribute('style', 'border-bottom-color: #15576a !important');
        document.getElementById("mrutdf").style.display = "none";
        telefono_df.setAttribute('style', 'border-bottom-color: #15576a !important');
        document.getElementById("mteldf").style.display = "none";
        
        
        
         postform();
     }
            
        
    }
    
    
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    
    function capitalize(text) {
        return text.replace(/\b\w/g , function(m){ return m.toUpperCase(); } );
    }
 
    
    function postform() {
      path = "resultado_cotizacion.php";
      var params = {
          nombre: document.getElementById("nombredf").value,
          rut: document.getElementById("rutdf").value,
          fono: document.getElementById("teldf").value,
          email: document.getElementById("correodf").value,
          of_1: 1,
          numero: minum,
          
        };
       
        
      // The rest of this code assumes you are not using a library.
      // It can be made less wordy if you use one.
      const form = document.createElement('form');
      form.method = "POST";
      form.action = path;
    
      for (const key in params) {
        if (params.hasOwnProperty(key)) {
          const hiddenField = document.createElement('input');
          hiddenField.type = 'hidden';
          hiddenField.name = key;
          hiddenField.value = params[key];
    
          form.appendChild(hiddenField);
        }
      }
    
      document.body.appendChild(form);
      form.submit();
      
    }
    
    
    
    function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}
	</script>
</body>
</html>