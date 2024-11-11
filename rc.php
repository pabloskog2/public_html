<?php 
	session_start();
	require_once("root_adm/adm_R.php");
	$fuente 		= file_get_contents("http://laboratorioradical.cl/valor_uf.php", "w+");
	$valor_uf     	= $fuente;
	$precio_new     	= $_POST['valor_depto'];
	$url 			= "n=".$_POST['nombre']."&e=".$_POST['email']."&t=".$_POST['fono']."&r=".$_POST['rut'];


	
	for($d = 1; $d <= 99; $d++)
	{
    	if($_POST['of_'.$d] == 1)
    	{
    		$url 	.= '&of_'.$_POST['numero'].'=1';
	   	}
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Colores Baron / cotizacion</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/lightbox.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<link rel="stylesheet" href="validador/mdv_validate.css">
	<script src="validador/mdv_formengine.js"></script>
	<script src="validador/fx.js"></script>
	
	
	<!-- calculo dividendo -->
	<link rel="stylesheet" href="css/screen.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="css/rangeslider.css" type="text/css" media="all" rel="stylesheet">
    
    <!-- End Facebook Pixel Code -->
</head>
<body>
<?php include  'include/nav.php' ?>


	<section class="intro-proy">
    <div class="container">
    	
    	<div class="row  top-mobile">
          	<div class="col-md-12  margin-bottom">
            		<h2 class="sub-title2" style="color:#4c62ad;">Resultado de cotización</h2>
            	</div>
	</div>
            	<?php 
	            	for($d = 1; $d <= 80; $d++)
	            	{
		            	if($_POST['of_'.$d] == 1)
		            	{
		            		$vivienda 		 = Datos_u("viviendas","id = ".$_POST['numero'],"*");
							
							
		            		
		        ?>
	<div class="row tipocasa">

		<div class="col-md-6">
		    
			        	    
		<h2 style="text-transform: capitalize;"><?php echo $transf; ?></h2>
			<img src="uploads/<?=$vivienda['imagenes']?>" class="img-responsive">
		</div>
		<div class="col-md-6">
			
			<h3><?=d($vivienda['nombre']);?></h3>
			<?=str_replace("<ul>",'<ul class="list-unstyled lista">',d($vivienda['descripcion']));?>
		</div>


	<div class="col-md-6">
		<h3>Precio</h3>
		<br>
		<table class="table table-bordered tablie">
			<tbody>
			<tr>
				<td>UF Desde</td>
				<td><?=d(3500);?></td>
			</tr>
						
			<tr>
				<td>$</td>
				<td id="uf_total"><?=number_format((str_replace(".","",3500) * $valor_uf), 0, ',', '.');?></td>
			</tr>
			</tbody>					
		</table>
	</div>

	<div class="col-md-6">
		<h3>Forma de Pago</h3>
			<table class="table table-bordered tablie">
				<tbody>
					          <tr>
					            <td>&nbsp;</td>
					            <td>&nbsp;</td>
					            <td>*Monto UF</td>
					            <td>** Monto $</td>
					          </tr>
					
					          <tr>
					            <td><b>Pie:</b></td>
					            <td>15,00%</td>
					            <td><?=str_replace(".","",3500) * 0.15;?></td>
					            <td id="pago_pie"><?=number_format((str_replace(".","",3500) * $valor_uf) * 0.15, 0, ',', '.');?></td>
					          </tr>
					
					          <tr style="color:#97272d;">
					            <td><b>Cr&eacute;dito hipotecario:</b></td>
					            <td>85,00%</td>
					            <td><?=str_replace(".","",3500) * 0.85;?></td>
					            <td id="pago_credito"><?=number_format((str_replace(".","",3500) * $valor_uf) * 0.85, 0, ',', '.');?></td>
					          </tr>
					
					          <tr class="border-tr">
					            <td><b>Total</b></td>
					            <td>100,00%</td>
					            <td><?=3500;?></td>
					            <td id="pago_total"><?=number_format((str_replace(".","",3500) * $valor_uf), 0, ',', '.');?></td>
					          </tr>
					
				</tbody>
			</table>
	</div>
	</div>
	<hr>

	
		        <?php
		            	}
	            	}
            	?>
            		<div class="row">
		            <div class="col-md-12 margin-bottom"><a href="generar.php?<?=$url?>"  target="_blank" class="btn btn-default btn-enviar">Descargar cotización</a>

						<div class="visible-xs"><br><br></div>
		            <a href="<?=$_SERVER['HTTP_REFERER'] ?>" style="margin-right: 10px;  background: #e6e6e6 !important;; color: #3F62AE !important;" class="btn btn-default btn-enviar">Volver al Proyecto</a>
            			
            			
            		</div>
	</div>

















<!--

<div class="row">
	<div class="col-md-12 margin-bottom"><br><br>
		<h2 class="sub-title2" style="color: #4c62ad; font-weight: 600;">Esto es lo que necesitas para ser propietario/a

Cómo Comprar:</h2>
<br><br>


<h3 style="color: #4c62ad; font-weight: 200;">Paso 1</h3>

<p>Tener 30 UF y contar con dos pre-aprobaciones bancarias acorde al valor de la propiedad.</p>


<hr>

<h3 style="color: #4c62ad; font-weight: 200;">Paso 2</h3>

<p>Reservar</p><br>
<p>Una vez que elijas la propiedad que quieres comprar, acércate a nuestra Sala de Ventas o toma contacto con nuestros ejecutivos y solicita la reserva de tu futuro hogar. </p>

<p>Haz el pago de las 30 UF</p>

<p>Entrega tus 2 preaprobaciones bancarias</p>



 

<p>Esto asegurará que no sigamos ofreciendo como disponible esa propiedad.</p>


<hr>

<h3 style="color: #4c62ad; font-weight: 200;">Paso 3</h3>

<p>Promesa de Compraventa
Ya cuentas con la pre-aprobación del Crédito Hipotecario y la reserva de la propiedad, ahora es momento de firmar la promesa, que es un documento que establece el compromiso de llevar a cabo la compra-venta, imponiendo multas a quienes no cumplan su parte del compromiso. En el momento de la firma de la promesa debe estar pagado el pie de la propiedad.</p>


<hr>

<h3 style="color: #4c62ad; font-weight: 200;">Paso4</h3>

<p>Escritura de Compraventa
Con la Promesa de Compraventa ya firmada, el proyecto con los permisos municipales aprobados, tu banco realizará el estudio de títulos y la tasación de la propiedad, lo que después de un breve proceso culminará con la redacción de la Escritura de Compraventa. Una vez firmado este documento, el banco lo envía al Conservador de Bienes Raíces para su inscripción, y una vez listo ese proceso la propiedad ya es tuya!.</p>

 

<p>No lo pienses más, acércate a nuestra sala de ventas y conversemos sobre tus dudas, nuestras ventajas y los pasos a seguir. Nuestro compromiso es acompañarte durante todo el proceso!</p>

 


<hr>
 

 

<p><strong>*Solicitar el Crédito Hipotecario</strong></p>

<p>Cotiza diferentes opciones de financiamiento en distintos bancos y elige la opción más cómoda para tí. Aquí puedes informarte sobre lo que necesitas para conseguirlo</p>
	</div>
</div>

         			<!-- Calculadora de dividendo -->
    <div class="col-md-12">
	<div class="content-section-area steps ptb-100" id="royal_calculators">
        <div class="row">
            <div class="col-md-12">
                <div class="main-heading-content">
                    <h2><span>Calculadora</span> Online</h2>
                    <p>Calcula ahora mismo el dividendo o el precio de la propiedad que deseas comprar.
                    <br>
                    Deslizando las barras para obtener el calculo aproximado. 
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
           <!-- wea calculador 1  -->
           
           
           
           
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-12">
                <div class="main-heading-content superior_dividenvo ">
                    <h2>Dividendo</h2>
      
                </div>
                <div class="calculadora" id="calc_profit">
                    
                        <div class="range_input">Valor de la propiedad: UF
    <span id="profit_credit_value"><?=3500;?></span>
</div>

<input type="range" name="profit_credit" data_describe="Monto del crédito: UF" class="form-control range-slider" min="500" data-orientation="horizontal" value="<?=3500;?>" max="25000"  id="profit_credit" required="" data-gformid="" data_value_id="profit_credit_value" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">

<div class="range_input">Pie: %
<span id="profit_porc_value">15</span>
</div>
<input type="range" name="profit_porc" data_describe="pie: %" class="form-control range-slider" min="15" data-orientation="horizontal" value="15" max="100" step="1" id="profit_porc" required="" data-gformid="" data_value_id="profit_porc_value" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0; display: none;"> 

<div class="range_input">Plazo: Años
<span id="profit_term_value">25</span>
</div>
<input type="range" name="profit_term" data_describe="Plazo: Años" class="form-control range-slider" min="5" data-orientation="horizontal" value="25" max="30" step="1" id="profit_term" required="" data-gformid="" data_value_id="profit_term_value" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">


<div class="range_input">Tasa de Interés: % 
    <span id="profit_interest_value">3</span>
</div>

<input type="range" name="profit_interest" data_describe="Tasa de Interés: % " class="form-control range-slider" min="2" data-orientation="horizontal" value="3" max="5" step=".1" id="profit_interest" required="" data-gformid="" data_value_id="profit_interest_value" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">


	

                    
                    <div id="profit_calculated" class="rangeslider-content">
                        <div class="rangeslider-text">
                            <h4>TU DIVIDENDO APROXIMADO SERÁ DE</h4>
                            <h2 id="profit_amount"><strong>---</strong> </h2> 
                            <p>Dividendo calculado a
                                <span id="profitYears">25</span> años con una tasa del
                                <span id="profitRate">3</span>% anual.</p>
                                <br>
                                <p>Con un pie del <span id="profitPiePorcentaje">15</span>% equivalente a :<span id="profiPie"><strong>$<?=number_format((str_replace(".","",3500) * $valor_uf) * 0.15,0,',', '.');?></strong></span></p>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
	</div>
    </div>
          			<!-- FIN Calculadora de dividendo -->
     
    
     <script>


var UF = <?php echo $valor_uf; ?>;




    var monto = $("input[name='profit_credit']").val();
  var valor_modelo = monto*<?php echo 29990; ?>;
                    var pie_porcentaje = $("input[name='profit_porc']").val();
                    var pie_a = ((monto*pie_porcentaje)/100);
                    var pie = Math.round(pie_a*<?php echo 29990; ?>);
var monto_final = Math.round(monto - pie_a);
	//funciones de dividendo
                    var tasa = Math.pow(1+$("input[name='profit_interest']").val()/100,1/12);
                    var plazo =$("input[name='profit_term']").val()*12;
                    var resultado = Math.round((monto_final*((tasa-1)/(1-(Math.pow(tasa, plazo*-1)))))*<?php echo $valor_uf; ?>);
                    console.log(resultado);


document.getElementById("profit_amount").innerHTML= "$ " + resultado.toLocaleString('es');


    
</script>      			
           		
           			
           			
            			<div class="row margin-bottom">
            			<hr>
		<div class="span_cotiza col-md-12">
			<p>Las imágenes contenidas en este sitio web son referenciales y pueden estar sujetas a modificaciones.</p>
			<p>* Montos en pesos correspondientes al valor de la UF de $ <?=$valor_uf;?>, al <?=date("j/m/Y");?>. </p>
			<p><b>Cotización preliminar.
Proceso de reserva se iniciará una vez entregado todos los antecedentes para evaluación. Precio desde en UF, varía en función de los m2. Cotización sujeta a disponibilidad.</b>
<br>
Los valores reflejados en las tasas de interés son referenciales y están sujetas a cambios de acuerdo a las políticas de cada institución financiera, no siendo de responsabilidad o control por parte de la  Inmobiliaria. No se reciben pagos en dinero en efectivo en la Sala de Ventas.</p>
		<p>Cotización valida por 7 dias apartir de la fecha de creación de la misma.</p>

		</div>

	</div>


    	
    </div>
    </section>






<?php include 'include/footer.php' ?>

	<script src="./js/modernizr-2.8.3.min.js"></script>
    <script src="./js/jquery-1.12.0.min.js"></script>
    <script src="./js/rangeslider.min.js" type="text/javascript" ></script>
    <script src="./js/calculators.js"></script>



	<script src="./js/bootstrap.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
	<script src="./js/script.js"></script>

<?php 
	require_once("validador/fx.php");
	
//	envio_cotizacion($_POST);
	
?>
</body>
</html>