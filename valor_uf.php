<?php

/*
function indicadores($tipo,$limite, $fin,$fuente){

$domain = strstr($fuente, $limite);

$domain = $domain;


switch ($tipo) {
    case "fecha":
        $domain=split('\n',$domain);
       return strip_tags(str_replace("al ","",str_replace($fin,"",$domain[0])));
        break;
		
    case "uf":
        $domain=strip_tags($domain);
        $domain=split('\n',$domain);
        return str_replace(array("\r\n", "\n", "\r", "\t","&","UF"," ","$","."),"",$domain[0]);
        break;
     case "utm":
        $domain=strip_tags($domain);
        $domain=split('\n',$domain);
        return str_replace(array("\r\n", "\n", "\r", "\t","&","UTM"," ","$"),"",$domain[0]);
        break;
         case "dolar":
        $domain=strip_tags($domain);
        $domain=split('\n',$domain);
        return str_replace(array("\r\n", "\n", "\r", "\t","&","lar Observado"," ","$"),"",$domain[0]);
        break;
    case 2:
        echo "i equals 2";
        break;
}

}

$fuente  = file_get_contents('http://www.bancoestado.cl/bancoestado/indiceseconomicos/indicadores.asp');

//echo "Fecha:".indicadores('fecha','al ', ")</fo",$fuente);

echo indicadores('uf','UF</a></font></td>', "z",$fuente);

//echo "<br>UTM:".indicadores('utm','UTM</a></font></td>', "z",$fuente);
//echo "<br>Dolar:".indicadores('dolar','lar Observado</a></font></td>', "z",$fuente);




*/



////////////// seccion new UF /////////////
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0)'); 
return imprimirUF(date("m"),date("Y"));


function nombreMes($mes){
  
  $mesArray = array( 
          1 => "Enero",
          2 => "Febrero",
          3 => "Marzo",
          4 => "Abril", 
          5 => "Mayo",
          6 => "Junio", 
          7 => "Julio", 
          8 => "Agosto",
          9 => "Septiembre", 
          10 => "Octubre", 
          11 => "Noviembre", 
          12 => "Diciembre", 
          13 => "Todos"
        );
        
  return $mesArray[intval($mes)];
}
function imprimirUF($mes_usr, $anio){

  $contenido = file_get_contents("http://www.sii.cl/valores_y_fechas/uf/uf".$anio.".htm");
  $dom = new DOMDocument;
  $dom->loadHTML($contenido);
  $tables = $dom->getElementById('table_export');

  foreach($dom->getElementById('table_export')->getElementsByTagName("tr") as $meses => $tr){
    foreach($tr->getElementsByTagName('td') as $dias => $td){
      $valores_por_mes[$dias][$meses] = $td->nodeValue;
    }
  }
  
  $array_uf = array();
  foreach($valores_por_mes as $meses => $arreglo_dias){
    
    $mes = intval($meses+1);
    if(strlen($mes)==1){ 
      $mes = "0".$mes; 
    }else{ 
      $mes; 
    }   
    
    foreach($arreglo_dias as $dias => $valor){      
      if($mes == $mes_usr || $mes_usr == 13){     
        if (strpos($valor,'.') !== false) {         
          if(strlen($dias)==1){ $dias = "0".$dias; }else{ $dias; }
          $fecha = $dias."-".$mes."-".$anio;
          $array_uf[$fecha] = $valor;
        }       
      }
    }   
  } 
   
  
  echo round(str_replace(array("\r\n", "\n", "\r", "\t","&","UF"," ","$","."),"",$array_uf[date("d-m-Y")]), 0, PHP_ROUND_HALF_UP);
  //echo "<br>";
  //echo json_encode($array_uf);
}







?>