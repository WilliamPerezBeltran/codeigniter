<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Netflift documentales
        <small></small>
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
          <h3 class="box-title">Todos los documentales</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application!
          
          
          
        
          <form method="POST" role="form">
             <?php echo validation_errors();?> 
              <div class="box-body">   
                  
                <div class="form-group <?php echo(form_error('titulo')==null)?'': 'has-error';  ?>">
                  <label >Titulo</label>
                  <input name="titulo" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo de la pelicula" value="<?php echo set_value('titulo'); ?>">
                  <?php //if(form_error('titulo')== !null){?>
                     <?php echo '<span class="help-block">'.form_error('titulo').'</span>';?>
                  <?php //}?>                  
                </div>
                  
                <div class="form-group <?php echo (form_error('estreno')==null)?'':'has-error'; ?> ">
                  <label >Estreno</label>
                  <input name="estreno" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter estreno" value="<?php echo set_value('estreno'); ?>">
                  <?php echo '<span class="help-block">'.form_error('estreno').'</span>';?>                  
                </div>
                  
                 <div class="form-group <?php echo (form_error('año')==null)?'':'has-error'; ?> ">
                  <label >Año</label>
                  <input name="año" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Año" value="<?php echo set_value('año'); ?>">
                  <?php echo '<span class="help-block">'.form_error('año').'</span>';?>
                </div>
                  
                <div class="form-group <?php echo (form_error('duracion')==null)?'':'has-error'; ?> ">
                  <label >Duracion</label>
                  <input name="duracion" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Año" value="<?php echo set_value('duracion'); ?>">
                  <?php echo '<span class="help-block">'.form_error('duracion').'</span>';?>
                </div>
                  
                <div class="form-group <?php echo (form_error('Sinopsis')==null)?'':'has-error'; ?> ">
                  <label >Sinopsis</label>
                  <input name="Sinopsis" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Año" value="<?php echo set_value('Sinopsis'); ?>">
                   <?php echo '<span class="help-block">'.form_error('duracion').'</span>';?>
                </div>
                  
                </div>
              <div class="form-group <?php echo (form_error('trailer')==null)?'':'has-error'; ?> ">
                  <label >Trailer</label>
                  <input name="trailer" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Año" value="<?php echo set_value('trailer'); ?>">
                  <?php echo '<span class="help-block">'.form_error('trailer').'</span>'; ?>
                </div>
                  
              <div class="form-group <?php echo (form_error('idPais')==null)?'':'has-error'; ?>">
                  <label>Pais</label>                 
                  <select name="idPais" class="form-control">
                      <option value="">enter pais </option>
                      <?php foreach ($paises as $pais){ ?>
                      <option  value="<?php  echo $pais['ID'];   ?>" <?php echo  set_select('idPais', $pais['ID']); ?>  ><?php echo $pais['nombre'] ;?></option>
                            <?php } ?>           
                  </select>    
                  <?php echo '<span class="help-block">'.form_error('idPais').'</span>'; ?>
                </div>
               
                
               <div class="col-md-6">
              <div class="form-group">
                <label>Actores</label>
                <select name="idactores[]" class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                    <?php foreach ($actores as $item_actor){ ?>
                    <option value="<?php  echo $item_actor['ID']; ?>"> <?php  echo $item_actor['nombre']; ?>  </option>
                    <?php }?>
                </select>
              </div>
              
              
             
              
              
              
                
              
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->
        </div>
      </div>
          
      
          
          
          
          
          
          
          
          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            footer

        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->