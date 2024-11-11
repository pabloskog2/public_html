<?php 
	// Fechas con formato dd/mm/aaaa
    function format_fecha($fecha)
    {

        $dia        = substr($fecha, 0,2);
        $mes        = substr($fecha, 3,2);
        $ano        = substr($fecha, 6,4);

        $mo['01']   = "Enero";
        $mo['02']   = "Febrero";
        $mo['03']   = "Marzo";
        $mo['04']   = "Abril";
        $mo['05']   = "Mayo";
        $mo['06']   = "Junio";
        $mo['07']   = "Julio";
        $mo['08']   = "Agosto";
        $mo['09']   = "Septiembre";
        $mo['10']   = "Octube";
        $mo['11']   = "Noviembre";
        $mo['12']   = "Diciembre";

        return $dia." de ".$mo[$mes]." del ".$ano;
    }

    // Funciones de preparación de e-mails

    function abre_email()
    {
        $html   = ' <html>
                        <head>
                            <style type="text/css">
                                .Estilo5 { font-family: Helvetica, sans-serif; }
                                .Estilo6 { font-family: Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
                                #tabla { border:1px solid #CCC; padding:15px; }
                                .blanco { color:#FFF; font-family: Helvetica; line-height:30px; }
								.negro { color:#000; font-family: Helvetica; line-height:30px; }

                                .h2 { margin-bottom:3px; margin-top:5px; font-size:20px; }
                                .h3 { font-size:18px; font-weight:bold; font-family: Helvetica; }

                                .texto { color: #666; font-family: Helvetica; font-size:12px; }
                                .normal { font-weight:normal; }
                                .negrita { font-weight:bold; }

                                .celda { border:1px solid #FFF; padding:4px; width:50%; }
                                .celda_simple { border:1px solid #FFF; padding:4px; }

                                .gris_claro { background-color: #ddd;}
                                .gris_oscuro { background-color: #d1d1d1;}

                                .imagen { width:10%; text-align:center; }

                                .centrado { font-family:Helvetica; text-align:center; font-size:10px; color: #666; }
                            </style>
                        </head>
                        <body>
						
						';

        return $html;
    }

    function abre_tabla()
    {
		
        $html   = '<table width="600" border="0" align="center" cellpadding="0" cellspacing="0" id="tabla">
		
		';

        return $html;
    }
 
	function bajada_cotiza()
    {
        $html   = '
			
		
		';

        return $html;
    }

	function bajada_normal()
    {
        $html   = '
		
		
		';

        return $html;
    }

    function cierra_tabla()
    {
        $html   = ' 
		<tr>
			<td colspan="7" width="600" height="80">
			
			</td>
			</tr>
		</table>
                        </body>
                        </html>';

        return $html;
    }

    function espaciador()
    {
        $html   = ' <tr bgcolor="#FFF">
                        <td colspan="8">&nbsp;</td>
                    </tr>';

        return $html;
    }

    function titulo($txt)
    {
        $html   = ' <tr>
                        <td colspan="8" align="center" class="negro"><h2 class="h2">'.$txt.'</h2></td>
                    </tr>';

        return $html;
    }

    function subtitulo($txt)
    {
        $html   = ' <tr>
                        <td colspan="8"><h3 class="h3">'.$txt.'</h2></td>
                    </tr>';

        return $html;
    }

    function texto($texto,$estilo)
    {
        $html   = ' <tr class="texto">
                        <td colspan="8"><span class="texto '.$estilo.'">'.$texto.'</span></td>
                    </tr>';

        return $html;
    }

    function centrado($texto)
    {
        $html   = ' <tr>
                        <td colspan="8" align="center"><span class="centrado">'.$texto.'</span></td>
                    </tr>';

        return $html;
    }

    function tabla_2col($r1,$r2,$color)
    {
        $html   = ' <tr class="texto">
                        <td colspan="4" class="celda" bgcolor="#'.$color.'">
                            <span class="texto">'.$r1.'</span>
                        </td>
                        <td colspan="4" class="celda" bgcolor="#'.$color.'">
                            <span class="texto">'.$r2.'</span>
                        </td>
                    </tr>';

        return $html;
    }

    function tabla_4col($r1,$r2,$r3,$r4,$color)
    {
        $html   = ' <tr class="texto">
                        <td width="1" class="celda_simple imagen" bgcolor="#'.$color.'">
                            '.$r1.'
                        </td>
                        <td colspan="5" class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r2.'</span>
                        </td>                        
                        <td class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r3.'</span>
                        </td>                        
                        <td class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r4.'</span>
                        </td>
                    </tr>';

        return $html;
    }

    function tabla_3col($r1,$r2,$r3,$color)
    {
        $html   = ' <tr class="texto">
                        <td colspan="6" class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r1.'</span>
                        </td>                        
                        <td colspan="1" class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r2.'</span>
                        </td>                        
                        <td colspan="1" class="celda_simple" bgcolor="#'.$color.'">
                            <span class="texto">'.$r3.'</span>
                        </td>
                    </tr>';

        return $html;
    }
    
    // funciones de envio de e-mail
    function envio_contacto($data)
    {
	    if (isset($data['minombre']))
		{
			
			Insertar("mensaje",
				 	"nombre,email,fono,mensaje,fecha",
				 	"'$data[minombre]','$data[miemail]','$data[mitelefono]','$data[mimensaje]','".date("Y-m-d H:i")."'");
		
		
			$content_mail	 = abre_email();
		
			$content_mail	.= abre_tabla();
		
			$content_mail	.= titulo("Mensaje contacto- Colores de Baron");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("Estimado (a) Administrador","negrita");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("Se han comunicado desde el formulario de contacto el d&iacute;a <b>".format_fecha(date("d/m/Y"))."</b> en <b>Colores de Baron</b>","normal");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("La solicitud ha quedado registrada bajo los siguientes datos:","normal");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= tabla_2col("<b>Nombre</b>",$data['minombre'],"ededed");
			$content_mail	.= tabla_2col("<b>Correo</b>",$data['miemail'],"ededed");
			$content_mail	.= tabla_2col("<b>Telefono</b>",$data['mitelefono'],"ededed");
			$content_mail	.= tabla_2col("<b>Comentarios</b>",$data['mimensaje'],"ededed");
		
			$content_mail	.= espaciador();
		
		    $content_mail	.= texto("Atentamente,","normal");
		    $content_mail	.= texto("Servicio Autom&aacute;tico Web","normal");
		    $content_mail	.= texto("<b>coloresdebaron.cl/</b>","negrita");
		
		    $content_mail	.= espaciador();
		    $content_mail	.= espaciador();
		
		    $content_mail	.= centrado("Este es un e-mail autogenerado por el Sistema, por favor no responder este mensaje.");
		
		    $content_mail	.= cierra_tabla();
		    
		    mail ("contacto@coloresdebaron.cl, ventas2@coloresdebaron.cl", "Mensaje de Contacto Colores de Baron", $content_mail, 
		      		"From: noresponder@coloresdebaron.cl\nContent-Type: text/html; charset=utf-8\nContent-Transfer-Encoding: 8bit");
		    			      		
		}    
    }

// FIN Funcion envio la reserva

    function envio_cotizacion($data)
    {
    	
	    if (isset($data['nombre']))
		{
			$data['nombre']			= trim($data['nombre']);
			$data['rut']			= trim($data['rut']);
			$data['fono']			= trim($data['fono']);
			$data['email']			= trim($data['email']);
			
			$arr_1		= array(".","-");
			$arr_2		= array("","");
			$pre_rut	= str_replace($arr_1, $arr_2, $data['rut']);
		
			$dv 	= substr($pre_rut,-1);
			$rut 	= substr($pre_rut,0,-1);
			$rut 	= number_format($rut,0,",",".");
			$rut_completo = $rut."-".$dv;
			$vivienda 		 = Datos_u("viviendas","id = ".$_POST['numero']);
			
			$html 	= '';
			
			for($d = 1; $d <= 100; $d++)
			{
				if($data['of_'.$d] == 1)
				{
					
					
					$inf 		 = Datos_u("viviendas","id = ".$_POST['numero'],"nombre");
					$inf2 		 = Datos_u("viviendas","id = ".$_POST['numero'],"proyecto");
					
					Insertar("cotizaciones",
						 	"nombre,email,rut,telefono,depto,fecha_reg,proyecto",
						 	"'$data[nombre]','$data[email]','$data[rut]','$data[fono]','$inf[nombre]','".date("Y-m-d H:i")."','$inf2[proyecto]'");
					
					$vivienda 		 = Datos_u("viviendas","id = ".$_POST['numero'],"nombre");
					$html 			.= '- '.$vivienda['nombre']."<br>";
					$last	= mysql_insert_id();
				}
			}
			
		      		
		    /* ENVIO DE COTIZACION A CLIENTE: */
			
			
			$fuente 		= file_get_contents("https://coloresdebaron.cl/valor_uf.php", "w+");
			$valor_uf     	= $fuente;	
			$mega 			= '';
			
		    // get the HTML
		    ob_start();
		    
		    for($d = 1; $d <= 100; $d++)
			{
		    	if($data['of_'.$d] == 1)
		    	{
			    	
			    	$vivienda 		 = Datos_u("viviendas","id = ".$_POST['numero'],"*");
					$proye 			.= '- '.$vivienda['proyecto']."<br>";
					
		    	
		?>
			<page style="font-size: 14px; max-width:1024px; width:1024px; float:left;">
	
		<br><br><br>
		
		<table style="width:650px; float:left; font-size:14px; color:#333;">
			<tr>
				<td colspan="2"  style="font-size:25px;font-weight:bold;color:#333;width:650px;">
					
					   
					  <p style="float: right;font-size: 16px;color: #3f62b0;text-align: right;">Cotizacíon Colores Baron</p>
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
				<td style="color: #828282;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Correo</td>
				<td style="color: #828282;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$data['email'];?></td>
			</tr>
			<tr>
				<td style="color: #828282;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Télefono</td>
				<td style="color: #828282;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$data['fono'];?></td>
			</tr>
			<tr>
				<td style="color: #828282;width:150px; font-size: 14px;font-weight: lighter;text-align: left;">Rut</td>
				<td style="color: #828282;width:500px; font-size: 14px;font-weight: lighter;text-align: left;">: &nbsp;&nbsp;<?=$data['rut'];?></td>
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
				        	<p style="font-size: 17px;font-weight: lighter;text-align: left;width:650px;color: #3f62b0;">Información Vivienda <?=str_replace("parquelosalerces","Parque los alerces",$vivienda['proyecto']);?> </p>
					        	<h3 style="font-size: 22px;font-weight: lighter;text-align: left;width:650px;color: #3f62b0;"><?=d($vivienda['nombre']);?></h3>
					        	<p style="color: #828282;font-size: 14px;font-weight: lighter;text-align: left;">
					        		<?=str_replace("<ul>",'<ul class="list-unstyled lista">',d($vivienda['descripcion']));?>
					        	</p>
						        <br><br> 
					        </td>
					    <td valign="top" style="padding-left:15px;width:300px;">					        
					        	<img src="https://coloresdebaron.cl/uploads/<?=$vivienda['imagenes']?>" style="width: 350px">
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
		    
		    //echo $content
		
		    // convert in PDF
		    require_once('html2pdf/html2pdf.class.php');
		    try
		    {
		        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
		//      $html2pdf->setModeDebug();
		        $html2pdf->setDefaultFont('Arial');
		        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
		        $html2pdf->Output('cotizaciones/cotizacion-'.$last.'.pdf','F');
		        
		        $content_mail	 = abre_email();		
				$content_mail	.= abre_tabla();				
				$content_mail	.= bajada_cotiza();				
				$content_mail	.= titulo("Cotizacion - Colores Baron");			
				$content_mail	.= espaciador();
			
				$content_mail	.= texto("Estimado Cliente","negrita");
			
				$content_mail	.= espaciador();
			
				$content_mail	.= texto("Gracias por cotizar con nosotros el d&iacute;a <b>".format_fecha(date("d/m/Y"))."</b> en <b>Colores Baron</b>","normal");
			
				$content_mail	.= espaciador();
			
				$content_mail	.= texto("La solicitud ha quedado registrada bajo los siguientes datos:","normal");
			
				$content_mail	.= espaciador();
			
				$content_mail	.= tabla_2col("<b>Nombre</b>",$data['nombre'],"ededed");	
				$content_mail	.= tabla_2col("<b>Tel&eacute;fono</b>",$data['fono'],"ededed");
				$content_mail	.= tabla_2col("<b>E-mail</b>",$data['email'],"ededed");
				$content_mail	.= tabla_2col("<b>RUT</b>",$data['rut'],"ededed");
				$content_mail	.= tabla_2col("<b>Proyecto</b>",$proye,"ededed");
				$content_mail	.= tabla_2col("<b>Vivienda</b>",$html,"ededed");
				$content_mail	.= tabla_2col("<b>Descargar cotizaci&oacute;n</b>",'
				<a href="https://coloresdebaron.cl/cotizaciones/cotizacion-'.$last.'.pdf" target="_blank"   style="width: 130px;display: block;float: none;background:#4d62a7;color:white;border-radius:0!important;padding: 10px 16px;margin: 10px 10px;text-decoration: none;font-size: 12px;">Descargar cotizaciones</a>',"ededed");
			
			    $content_mail	.= espaciador();
			
			    $content_mail	.= texto("Atentamente,","normal");
			    $content_mail	.= texto("Servicio Autom&aacute;tico Web","normal");
			    //$content_mail	.= texto("<b>www.patagonia-invest.cl</b>","negrita");
			
			    $content_mail	.= espaciador();
			    $content_mail	.= espaciador();
			
			    $content_mail	.= centrado("Este es un e-mail autogenerado por el Sistema, por favor no responder este mensaje.");
			
			    $content_mail	.= cierra_tabla();
			    
			    mail ($data['email'], "Solicitud de Cotizacion - Colores Baron", $content_mail, 
			      		"From: noresponder@coloresbaron.cl\nContent-Type: text/html; charset=utf-8\nContent-Transfer-Encoding: 8bit");
			      		
		    }
		    catch(HTML2PDF_exception $e) {
		        echo $e;
		        exit;
		    }
		    
		    /* ENVIO COTIZACIÓN A VENDEDOR */
		    $content_mail	 = abre_email();
		
			$content_mail	.= abre_tabla();
			
			$content_mail	.= bajada_cotiza();	
			
			$content_mail	.= titulo("Cotizacion - Colores Baron");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("Estimado (a) Administrador","negrita");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("Se ha solicitado una cotizaci&oacute;n el d&iacute;a <b>".format_fecha(date("d/m/Y"))."</b> en <b>WEB COLORES BARON</b>","normal");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("La solicitud ha quedado registrada bajo los siguientes datos:","normal");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= tabla_2col("<b>Nombre</b>",$data['nombre'],"ededed");	
			$content_mail	.= tabla_2col("<b>Tel&eacute;fono</b>",$data['fono'],"ededed");
			$content_mail	.= tabla_2col("<b>E-mail</b>",$data['email'],"ededed");
			$content_mail	.= tabla_2col("<b>RUT</b>",$data['rut'],"ededed");
			$content_mail	.= tabla_2col("<b>Proyecto</b>",$proye,"ededed");
			$content_mail	.= tabla_2col("<b>Vivienda</b>",$html,"ededed");
			$content_mail	.= tabla_2col("<b>Descargar cotizaci&oacute;n</b>",'<a href="https://coloresdebaron.cl/cotizaciones/cotizacion-'.$last.'.pdf" target="_blank"   style="width: 130px;display: block;float: none;background:#4d62a7;color:white;border-radius:0!important;padding: 10px 16px;margin: 10px 10px;text-decoration: none;font-size: 12px;">Descargar cotizaciones</a>',"ededed");
		
		    $content_mail	.= espaciador();
		
		    $content_mail	.= texto("Atentamente,","normal");
		    $content_mail	.= texto("Servicio Autom&aacute;tico Web","normal");
		    //$content_mail	.= texto("<b>patagonia-invest.cl</b>","negrita");
		
		    $content_mail	.= espaciador();
		    $content_mail	.= espaciador();
		
		    $content_mail	.= centrado("Este es un e-mail autogenerado por el Sistema, por favor no responder este mensaje.");
		
		    $content_mail	.= cierra_tabla();
		     
		    mail ("contacto@coloresdebaron.cl, ventas2@coloresdebaron.cl", "Solicitud de Cotizacion - Colores Baron", $content_mail, 
		      		"From: noresponder@coloresbaron.cl\nContent-Type: text/html; charset=utf-8\nContent-Transfer-Encoding: 8bit");
			     		
		}    
    }

    function envio_postventa($data)
    {
	    if (isset($data['nombre']))
		{
			$data['rut']			= trim($data['rut']);
            $data['nombre']			= trim($data['nombre']);            
			$data['apellido']		= trim($data['apellido']);
            $data['email']			= trim($data['email']);
			$data['fono']			= trim($data['fono']);			
			$data['proyecto']		= trim($data['proyecto']);
			$data['etapa']			= trim($data['etapa']);
			$data['depto']			= trim($data['depto']);
			
			$arr_1		= array(".","-");
			$arr_2		= array("","");
			$pre_rut	= str_replace($arr_1, $arr_2, $data['rut']);
		
			$dv 	= substr($pre_rut,-1);
			$rut 	= substr($pre_rut,0,-1);
			$rut 	= number_format($rut,0,",",".");
			$rut_completo = $rut."-".$dv;
			
			$problemas 				= '';
			$correo					= '';
			
			for($p = 1; $p <= 6; $p++) 
			{
				if($data['detalle_'.$p] != '')
				{
					$problemas		.= $data['detalle_'.$p].";";
					$correo			.= tabla_2col("<b>Problema ".$p."</b>",$data['detalle_'.$p],"ededed");
				}
			}
		
			Insertar("post venta",
				 	"rut,
					nombre,
                    apellido,
                    email,
                    fono,
					proyecto,
					etapa,
					depto,
					problemas,
					fecha",
				 	"'$rut_completo',
					'$data[fono]',
					'$data[nombre]',
                    '$data[apellido]',
					'$data[proyecto]',
                    '$data[email]',
					'$data[etapa]',
					'$data[depto]',
					'$problemas',
					'".date("Y-m-d H:i")."'
					");
		
		
			$content_mail	 = abre_email();
		
			$content_mail	.= abre_tabla();
			
			$content_mail	.= bajada_normal();
		
			$content_mail	.= titulo("SOLICITUD DE POST VENTA - WEB MIRAMAR");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("Estimado (a) Administrador","negrita");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("Se ha enviado una solicitud desde el formulario de Post venta el d&iacute;a <b>".format_fecha(date("d/m/Y"))."</b> en <b>Miramar.cl</b>","normal");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= texto("La solicitud ha quedado registrada bajo los siguientes datos:","normal");
		
			$content_mail	.= espaciador();
		
			$content_mail	.= tabla_2col("<b>Nombre</b>",$data['nombre'],"ededed");
            $content_mail	.= tabla_2col("<b>Apellido</b>",$data['apellido'],"ededed");
            $content_mail	.= tabla_2col("<b>Rut</b>",$rut_completo,"ededed");
			$content_mail	.= tabla_2col("<b>Tel&eacute;fono</b>",$data['fono'],"ededed");
			$content_mail	.= tabla_2col("<b>E-mail</b>",$data['email'],"ededed");
			$content_mail	.= tabla_2col("<b>Proyecto</b>",$data['proyecto'],"ededed");
			$content_mail	.= tabla_2col("<b>Etapa</b>",$data['etapa'],"ededed");
			$content_mail	.= tabla_2col("<b>Departamento</b>",$data['depto'],"ededed");
			
			$content_mail	.= subtitulo("Solicitud");
			
			$content_mail 	.= $correo;
		
			$content_mail	.= espaciador();
		
		    $content_mail	.= texto("Atentamente,","normal");
		    $content_mail	.= texto("Servicio Autom&aacute;tico Web","normal");
		    $content_mail	.= texto("<b>WEB MIRAMAR</b>","negrita");
		
		    $content_mail	.= espaciador();
		    $content_mail	.= espaciador();
		
		    $content_mail	.= centrado("Este es un e-mail autogenerado por el Sistema, por favor no responder este mensaje.");
		
		    $content_mail	.= cierra_tabla();
		    
		    mail ("ventas2@coloresdebaron.cl", "Solicitud de Post Venta - Miramar", $content_mail, 
		      		"From: noresponder@miramar.cl\nContent-Type: text/html; charset=utf-8\nContent-Transfer-Encoding: 8bit");
			      		
		}    
    }
    


    
    
?>