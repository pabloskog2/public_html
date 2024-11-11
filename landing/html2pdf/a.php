<page style="font-size: 14px; max-width:1024px; width:1024px; float:left;">
	
		<br><br><br>
		
		<table style="width:650px; float:left; font-size:14px; color:#333;">
			<tr>
				<td colspan="2"  style="font-size:25px;font-weight:bold;color:#333;width:650px;">
					<img src="http://laboratorioradical.cl/prodelca/img/logo.png" style="float: left;width:160px;" align="left">
					   
					  <p style="float: right;font-size: 16px;color: #3f62b0;text-align: right;">COTIZACIÓN - WEB PRODELCA</p>
				</td>
			</tr>
			<br>
			<tr>
			<br><br>
				<td colspan="2"  style="font-size:25px;font-weight:bold;color:#333;text-align:center;width:650px;">
					<p style="font-size: 17px;font-weight: lighter;text-align: left;width:650px;color: #3f62b0;">INFORMACIÓN PERSONAL</p>
				</td>
			</tr>
			<tr>
			<br><br>
				<td style="color: #828282;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Nombre</td>
				<td style="color: #828282;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$data['nombre'];?></td>
			</tr>
			<tr>
				<td style="color: #828282;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Apellido</td>
				<td style="color: #828282;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$data['apellido'];?></td>
			</tr>
			<tr>
				<td style="color: #828282;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Correo</td>
				<td style="color: #828282;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$data['email'];?></td>
			</tr>
			<tr>
				<td style="color: #828282;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Télefono</td>
				<td style="color: #828282;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$data['fono'];?></td>
			</tr>
			<tr>
				<td style="color: #828282;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Rut</td>
				<td style="color: #828282;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$rut_completo;?></td>
			</tr>
			<tr>
				<td style="color: #828282;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Fecha</td>
				<td style="color: #828282;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=date("d-m-Y");?></td>
			</tr>			
			<tr>
				<td colspan="2">
					<br>
			        <table style="width:100%;max-width:650px;font-size:12px;border-top: 1px solid #3f62b0; padding-top: 30px;pading-bottom: 30px;">
			        	<tr>
			        	<td style="width:350px;" valign="top">
				        	<p style="font-size: 17px;font-weight: lighter;text-align: left;width:650px;color: #3f62b0;">Información Vivienda <?=$vivienda['proyecto']?> </p>
					        	<h3 style="font-size: 22px;font-weight: lighter;text-align: left;width:650px;color: #3f62b0;"><?=d($vivienda['nombre']);?></h3>
					        	<p style="color: #828282;font-size: 14px;font-weight: lighter;text-align: left;">
					        		<?=str_replace("<ul>",'<ul class="list-unstyled lista">',d($vivienda['descripcion']));?>
					        	</p>
						        <br><br> 
					        </td>
					    <td valign="top" style="padding-left:15px;width:300px;">					        
					        	<img src="http://laboratorioradical.cl/prodelca/uploads/<?=$vivienda['imagenes']?>" style="width: 350px">
					        </td>
				        </tr>
				        <br>
			        </table>
			        <br>
			        <br>
			        <table width="750" height="250" style="width:100%; float:left; font-size:14px; text-align: left;border-top: 1px solid #3f62b0;border-bottom: 1px solid #3f62b0;padding-top: 20px;pading-bottom: 50px;display: block;">
					  <thead  style="width: 100%">
						<tr>
						  <th style="width:50% ;color: #3f62b0;">Simulación</th>
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
						  <td id="pago_credito">$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf) * 0.2, 0, ',', '.');?></td>
						  <td>20%</td>
						  <td>UF <?=str_replace(".","",$vivienda['precio']) * 0.2;?></td>
						</tr>
						<tr style="width: 100%">
						  <th scope="row">Credito Hipotecario</th>
						  <td id="pago_credito">$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf) * 0.8, 0, ',', '.');?></td>
						  <td>80%</td>
						  <td>UF <?=str_replace(".","",$vivienda['precio']) * 0.8;?></td>
						</tr>
						 <tr style="width: 100%">
						  <th scope="row" style="color: #3f62b0;">Total</th>
						  <td id="pago_total">$ <?=number_format((str_replace(".","",$vivienda['precio']) * $valor_uf), 0, ',', '.');?></td>
						  <td>100%</td>
						  <td style="color: #3f62b0;">UF <?=d($vivienda['precio']);?></td>
						</tr>
						
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2">    			        
			       <p style="font-size:12px;width:650px;">Las imágenes contenidas en este sitio web son referenciales y pueden estar sujetas a modificaciones.</p>
				<p style="font-size:12px;width:650px;">* Montos en pesos correspondientes al valor de la UF de $ <?=$valor_uf;?>, al <?=date("j/m/Y");?>. </p>
			<p style="font-size:12px;width:650px;"><b>Cotización preliminar.
Proceso de reserva se iniciará una vez entregado todos los antecedentes para evaluación. Precio desde en UF, varía en función de los m2 del terreno. Cotización sujeta a disponibilidad.</b>
<br>
Los valores reflejados en las tasas de interés son referenciales y están sujetas a cambios de acuerdo a las políticas de cada institución financiera, no siendo de responsabilidad o control por parte de Inmobiliaria Prodelca. No se reciben pagos en dinero en efectivo en la Sala de Ventas.</p>
					
				</td>
			</tr>			
			
		</table>
				
	</page>