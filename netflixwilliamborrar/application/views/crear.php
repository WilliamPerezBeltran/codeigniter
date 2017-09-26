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
          
          
          
          
        
          <form method="POST" role="form">
           <div class="box-body">   
              <div class="box-body <?php echo (form_error('tituloOriginal')==null)?'':'has-error';    ?> ">
                  <div class="form-group ">
                    <label >Titulo</label>
                    <input name="tituloOriginal" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo de la tituloOriginal" value="<?php echo set_value('tituloOriginal');?>" >
                    <?php echo '<span class="help-block">'.form_error('tituloOriginal').'</span>'; ?>
                </div>
              </div>
              <div class="box-body <?php echo (form_error('estreno')==null)?'':'has-error';    ?> ">
                  <div class="form-group ">
                  <label >estreno</label>
                  <input name="estreno" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo de la estreno" value="<?php echo set_value('estreno');?>" >
                  <?php echo '<span class="help-block">'.form_error('estreno').'</span>'; ?>
                  </div>
              </div>
              <div class="box-body <?php echo (form_error('año')==null)?'':'has-error';    ?> ">
                  <div class="form-group ">
                  <label >año</label>
                  <input name="año" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo de la año" value="<?php echo set_value('año');?>" >
                  <?php echo '<span class="help-block">'.form_error('año').'</span>'; ?>
              </div>
                </div>

              <div class="box-body <?php echo (form_error('duracion')==null)?'':'has-error';    ?> ">
                  <div class="form-group ">
                  <label >duracion</label>
                  <input name="duracion" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo de la duracion" value="<?php echo set_value('duracion');?>" >
                  <?php echo '<span class="help-block">'.form_error('duracion').'</span>'; ?>
              </div>
                  </div>
              <div class="box-body <?php echo (form_error('sinopsis')==null)?'':'has-error';    ?> ">
                  <div class="form-group ">
                  <label >sinopsis</label>
                  <input name="sinopsis" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo de la sinopsis" value="<?php echo set_value('sinopsis');?>" >
                  <?php echo '<span class="help-block">'.form_error('sinopsis').'</span>'; ?>
              </div>
                  </div>
              <div class="box-body <?php echo (form_error('trailer')==null)?'':'has-error';    ?> ">
                  <div class="form-group ">
                  <label >trailer</label>
                  <input name="trailer" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo de la trailer" value="<?php echo set_value('trailer');?>" >
                  <?php echo '<span class="help-block">'.form_error('trailer').'</span>'; ?>
              </div>
                  </div>
              
                <div class="form-group <?php echo (form_error('pais')==null)?'':'has-error';    ?>">
                  <label>Select</label>                   
                  <select name="pais" class="form-control  ">
                      <option value="">Seleccione un pais</option>
                      <?php foreach ($paises as $paisesfsf){?>
                    <option value="<?php echo $paisesfsf['ID']; ?>" <?php echo set_select('pais',$paisesfsf['ID']);?> > <?php echo $paisesfsf['nombre']; ?></option>
                    <?php } ?>                    
                  </select>
                  <?php echo '<span class="help-block">'.form_error('pais').'</span>'; ?>
                </div>
                  
               
              <div class="form-group <?php echo (form_error('idActores[]')==null)?'':'has-error';    ?>">                   
                <label>pais</label>
                <select name="idActores[]" class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">                   
                      <?php foreach ($actores as $actoresW){?>
                    <option value="<?php echo $actoresW['ID']; ?>"><?php echo $actoresW['nombre']; ?> </option>
                      <?php }?>
                </select>
                <?php echo '<span class="help-block">'.form_error('idActores[]').'</span>'; ?>
              </div>
                     
                   
                     
                     
                <button type="submit" class="btn btn-primary">Submit</button>
              
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