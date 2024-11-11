<?php 
	session_start();
	require_once("root_adm/adm_R.php");
	
	$fuente 		= file_get_contents("http://laboratorioradical.cl/valor_uf.php", "w+");
	$valor_uf     	= $fuente;	
	$precio_new     	= $_GET['valor'];
	
    // get the HTML
    ob_start();
    
    for($d = 1; $d <= 99; $d++)
	{
    	if($_GET['of_'.$d] == 1)
    	{
	    	
	    	$vivienda 		 = Datos_u("viviendas","id = ".$d,"*");
			
	    	
    	
?>




	<page style="font-size: 14px; max-width:1024px; width:1024px; float:left;">
	
		<br><br><br>
		
		<table style="width:650px; float:left; font-size:14px; color:#333;">
			<tr>
				<td colspan="2"  style="font-size:25px;font-weight:bold;color:#333;width:650px;">
					<!--<img src="img/logoazul.svg" style="float: left;width:160px;width:10%" align="left">-->
					   
					  <p style="float: right;font-size: 16px;color: #15576a;text-align: right;">COTIZACIÓN - COLORES BARON</p>
				</td>
			</tr>
			<br>
			<tr>
			<br><br>
				<td colspan="2"  style="font-size:25px;font-weight:bold;color:#333;text-align:center;width:650px;">
					<p style="font-size: 17px;font-weight: lighter;text-align: left;width:650px;color: #15576a;">INFORMACIÓN PERSONAL</p>
				</td>
			</tr>
			<tr>
			<br><br>
				<td style="color: #15576a;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Nombre</td>
				<td style="color: #15576a;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$_GET['n'];?></td>
			</tr>
			<tr>
				<td style="color: #15576a;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">RUT</td>
				<td style="color: #15576a;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$_GET['r'];?></td>
			</tr>
			<tr>
				<td style="color: #15576a;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Correo</td>
				<td style="color: #15576a;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$_GET['e'];?></td>
			</tr>
			<tr>
				<td style="color: #15576a;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Télefono</td>
				<td style="color: #15576a;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$_GET['t'];?></td>
			</tr>
		
		
			
			
			
			<tr>
				<td style="color: #15576a;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Fecha</td>
				<td style="color: #15576a;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=date("d-m-Y");?></td>
			</tr>			
			<tr>
				<td colspan="2">
					<br>
			        <table style="width:100%;max-width:650px;font-size:12px;border-top: 1px solid #15576a; padding-top: 30px;pading-bottom: 30px;">
			        	<tr>
			        	<td style="width:350px;" valign="top">
			        	   
				        	<p style="font-size: 17px;font-weight: lighter;text-align: left;width:650px;color: #15576a;">Información Vivienda <?php echo $transf; ?> </p>
					        	<h3 style="font-size: 22px;font-weight: lighter;text-align: left;width:650px;color: #15576a;"><?=d($vivienda['nombre']);?></h3>
					        	<p style="color: #15576a;font-size: 14px;font-weight: lighter;text-align: left;">
					        		<?=str_replace("<ul>",'<ul class="list-unstyled lista">',d($vivienda['descripcion']));?>
					        	</p>
						        <br><br> 
					        </td>
					    <td valign="top" style="padding-left:15px;width:300px;">					        
					        	<img src="uploads/<?=$vivienda['imagenes']?>" style="width: 350px">
					        </td>
				        </tr>
				        <br>
			        </table>
			        <br>
			        <br>
			        <table width="750" height="250" style="width:100%; float:left; font-size:14px; text-align: left;border-top: 1px solid #15576a;border-bottom: 1px solid #15576a;padding-top: 20px;pading-bottom: 50px;display: block;">
					  <thead  style="width: 100%">
						<tr>
						  <th style="width:50% ;color: #15576a;">Simulación</th>
						  <th style="width:16.6666667%; color: #15576a;">Monto en pesos</th>
						  <th style="width:16.6666667%;">&nbsp;</th>
						  <th style="width:16.6666667%; color: #15576a;">Monto UF</th>
						</tr>
					  </thead>
						<tr style="width: 100%">
						  <th scope="row">Precio</th>
						  <td>$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf), 0, ',', '.');?></td>
						  <td>&nbsp;</td>
						  <td style="color: #15576a;">UF <?=d($vivienda['precio']);?></td>
						</tr>
						<tr style="width: 100%">
						  <th scope="row">Pie</th>
						  <td id="pago_credito">$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf) * 0.15, 0, ',', '.');?></td>
						  <td>15%</td>
						  <td>UF <?=str_replace(".","",$vivienda['precio']) * 0.15;?></td>
						</tr>
						<tr style="width: 100%">
						  <th scope="row">Credito Hipotecario</th>
						  <td id="pago_credito">$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf) * 0.85, 0, ',', '.');?></td>
						  <td>85%</td>
						  <td>UF <?=str_replace(".","",$vivienda['precio']) * 0.85;?></td>
						</tr>
						 <tr style="width: 100%">
						  <th scope="row" style="color: #15576a;">Total</th>
						  <td id="pago_total">$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf), 0, ',', '.');?></td>
						  <td>100%</td>
						  <td style="color: #15576a;">UF <?=d($vivienda['precio']);?></td>
						</tr>
						
					</table>
					<br>
			        <br>
			        <!--
			        <table width="750" height="250" style="width:100%; float:left; font-size:14px; text-align: left;border-top: 1px solid #3f62b0;border-bottom: 1px solid #3f62b0;padding-top: 20px;pading-bottom: 50px;display: block;">
					  <thead  style="width: 100%">
						<tr>
						  <th style="width:50% ;color: #3f62b0;">Forma de pago pie 10%</th>
						  <th style="width:16.6666667%; color: #3f62b0;">Monto en pesos</th>
						  <th style="width:16.6666667%;">&nbsp;</th>
						  <th style="width:16.6666667%; color: #3f62b0;">Monto UF</th>
						</tr>
					  </thead>
						<tr style="width: 100%">
						  <th scope="row">Precio</th>
						  <td>$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf), 0, ',', '.');?></td>
						  <td>&nbsp;</td>
						  <td style="color: #3f62b0;">UF <?=d($vivienda['precio']);?></td>
						</tr>
						<tr style="width: 100%">
						  <th scope="row">Pie</th>
						  <td id="pago_credito">$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf) * 0.1, 0, ',', '.');?></td>
						  <td>10%</td>
						  <td>UF <?=str_replace(".","",$vivienda['precio']) * 0.1;?></td>
						</tr>
						<tr style="width: 100%">
						  <th scope="row">Credito Hipotecario</th>
						  <td id="pago_credito">$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf) * 0.9, 0, ',', '.');?></td>
						  <td>90%</td>
						  <td>UF <?=str_replace(".","",$vivienda['precio']) * 0.9;?></td>
						</tr>
						 <tr style="width: 100%">
						  <th scope="row" style="color: #3f62b0;">Total</th>
						  <td id="pago_total">$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf), 0, ',', '.');?></td>
						  <td>100%</td>
						  <td style="color: #3f62b0;">UF <?=d($vivienda['precio']);?></td>
						</tr>
						
					</table>-->
				</td>
			</tr>
			<tr>
				<td colspan="2">    			        
			       <p style="font-size:12px;width:650px;">Las imágenes contenidas en este sitio web son referenciales y pueden estar sujetas a modificaciones.</p>
				<p style="font-size:12px;width:650px;">* Montos en pesos correspondientes al valor de la UF de $ <?=$valor_uf;?>, al <?=date("j/m/Y");?>. </p>
			<p style="font-size:12px;width:650px;"><b>Cotización preliminar.
Proceso de reserva se iniciará una vez entregado todos los antecedentes para evaluación. Precio desde en UF, varía en función de los m2 del departamento. Cotización sujeta a disponibilidad.</b>
<br>
Los valores reflejados en las tasas de interés son referenciales y están sujetas a cambios de acuerdo a las políticas de cada institución financiera, no siendo de responsabilidad o control por parte de esta Inmobiliaria. No se reciben pagos en dinero en efectivo en la Sala de Ventas.</p>
					
				</td>
			</tr>			
			
		</table>
				
	</page>
<?php
	}
	
	}
    $content = ob_get_clean();

    // convert in PDF
    require_once('html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('Cotizacion.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>