<?php 
     // Proyectos
    $tag['parquelosalerces']  = "Parque Los Alerces";
    $tag['parqueescondido']  = "Parque Escondido";
    $tag['patagoniaski']  = "Patagonia Ski";
    

    $codigo             = $query;
?>
<div id="content-header">
  	<div id="breadcrumb"> 
        <a href="<?=$mod_root;?>" class="tip-bottom">Viviendas</a>
        <a href="<?=$mod_root;?>&p=<?=$codigo;?>" class="tip-bottom"><?=$tag[$codigo];?></a>
        <a href="<?=$mod_root;?>new_vivienda" class="current">Crear Vivienda</a>
    </div>
  	<h1>Crear Vivienda</h1>
</div>

<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      	<div class="span12">

        	<div class="widget-box">
          		<div class="widget-title"> 
                  <span class="icon"> <i class="icon-align-justify"></i> </span>
                  <h5>Vivienda</h5>
              </div>

              <div class="widget-content nopadding" id="printhere">
                  
                  <form class="form-horizontal" method="post" action="#" 
                      name="vivienda" id="vivienda" novalidate="novalidate">

                      <?=error_msges();?>

                      <input type="hidden" name="modo" value="nuevo" />
                      <input type="hidden" name="ruta" value="<?=$mod_root;?>" />
                      <input type="hidden" name="proyecto" value="<?=$query;?>" />

                      <div class="control-group">
                          <label class="control-label">Nombre Vivienda</label>
                          <div class="controls">
                              <input type="text" name="nombre" id="nombre" class="span4 required">
                          </div>
                      </div>
                      
                      <!--<div class="control-group">
                          <label class="control-label">Tipo de Vivienda</label>
                          <div class="controls">
                              <select name="tipo" id="tipo" class="span4">
	                          <?php 
		                          // Tipos
		                          $tipos	= Datos("all_tipos","1 order by nombre ASC","*");
		                          
		                          while($t = mysql_fetch_assoc($tipos))
		                          {
			                  ?>
			                      	  <option value="<?=$t['id']?>"><?=d($t['nombre']);?></option>
			                  <?php
		                          }
	                          ?>	                              
                              </select>
                          </div>
                      </div>-->

                      <div class="control-group">
                          <label class="control-label">Descripción</label>
                          <div class="controls">
                              <textarea name="descripcion" id="descripcion" rows="12" 
                                class="span9 required textarea_editor"></textarea>
                          </div>
                      </div>

                      <div class="control-group">
                          <label class="control-label">Precio</label>
                          <div class="controls">
                              <div class="input-append">
                                  <input type="text" name="precio" id="precio" class="span10">
                                  <span class="add-on">UF</span>
                              </div>
                          </div>
                      </div>

                      <div class="control-group">
                          <label class="control-label">Imagen Principal</label>

                          <?=file_field("upload_file",'',"foto");?>

                      </div>

                      <div class="form-actions">
                          <input type="submit" value="Guardar" class="btn btn-success">
                          &nbsp;&nbsp;
                          <a href="<?=$mod_root;?>" class="btn btn-danger">Cancelar</a>
                      </div>

                  </form>

                  <?=modal_field("upload_file","archivo_imagen","foto","midiv",2);?>
                  <?=modal_repositorie("upload_file","foto",2);?>

              </div>
       		</div>

        </div>
    </div>
</div>