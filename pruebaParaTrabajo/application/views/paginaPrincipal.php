

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Proyecto</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">











                    <?php
                    $attributes = array('autocomplete' => 'off');
                    echo form_open_multipart('controladorPrueba/paginaPrincipal', $attributes);
                    ?>
                    <?php echo validation_errors(); ?> 
                    <!-- text input -->
                    <div class="form-group" >
                        
                       
                       Foto: <input name="foto" id="foto" type="file"  class="form-control" required="required" placeholder="Ingrese foto" value="">
                    </div>
                    
                    
                    <div class="form-group <?php echo(form_error('nombre')==null)?'': 'has-error';  ?>">
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre" <?php echo set_select('nombre') ?>>
                    </div>

                    <div class="form-group <?php echo(form_error('tipo')==null)?'': 'has-error';  ?>">
                        <label>Tipo</label>                 
                        <select name="tipo" class="form-control">
                            <option value="">Ingrese tipo </option>
                            <?php foreach ($tipo as $item_tipo) { ?>
                                <option  value="<?php echo $item_tipo['id']; ?>" <?php echo set_select('Tipo', $item_tipo['id']); ?>  ><?php echo $item_tipo['tipo']; ?></option>
                            <?php } ?>           
                        </select>    
                    </div>
                    <!-- radio -->
                    <div class="form-group ">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Fase 1
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Fase 2
                            </label>
                        </div>
                    </div>  
                    <!-- select -->

                    <div class="form-group <?php echo(form_error('ciudad')==null)?'': 'has-error';  ?>">
                        <label>ciudad</label>                 
                        <select name="ciudad" class="form-control">
                            <option value="">Ingrese ciudad </option>
                            <?php foreach ($ciudades as $item_ciudades) { ?>
                                <option  value="<?php echo $item_ciudades['id']; ?>" <?php echo set_select('ciudad', $item_ciudades['id']); ?>  ><?php echo $item_ciudades['nombre_ciudad']; ?></option>
                            <?php } ?>           
                        </select>    
                    </div>
                    <div class="form-group <?php echo(form_error('departamento')==null)?'': 'has-error';  ?>">
                    <label>Departamento</label>      
                    <select name="departamento" class="form-control">
                        <option value="">ingrese departamento </option>
                        <?php foreach ($departamentos as $item_departamentos) { ?>
                            <option  value="<?php echo $item_departamentos['ID']; ?>" <?php echo set_select('departamento', $item_departamentos['ID']); ?>  ><?php echo $item_departamentos['nombre_departamento']; ?></option>
                        <?php } ?>           
                    </select>  
                     </div>

                    <div class="form-group <?php echo(form_error('fecha')==null)?'': 'has-error';  ?>">
                        <label>Fecha</label>
                        <input name="fecha" type="text" class="form-control" placeholder="dia/mes/año">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-submit" value="Registrar">
                    </div>

                    </form>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-8" style="border:1px solid blue">.col-xs-12 .col-sm-6 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>
<div class="row">
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
</div>
                    
                    
                    
                    
   




























            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

 