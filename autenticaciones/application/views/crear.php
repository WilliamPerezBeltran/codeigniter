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
          
          
          
        <!-- habia un form y lo reemplazamos por el codigo que esta abajo. Esto es de html y  -->
       <?php $attributes = array('autocomplete' => 'off'); echo form_open_multipart('controladorAutenticaciones/crear',$attributes);?>
             <?php// echo validation_errors();?> 
              <div class="box-body">   
                  
                <div class="form-group <?php echo(form_error('nombre')==null)?'': 'has-error';  ?>">
                  <label >nombre</label>
                  <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo de la nombre" value="<?php echo set_value('nombre'); ?>">
                  <?php //if(form_error('titulo')== !null){?>
                     <?php echo '<span class="help-block">'.form_error('nombre').'</span>';?>
                  <?php //}?>                  
                </div>
                  
                <div class="form-group <?php echo (form_error('correo')==null)?'':'has-error'; ?> ">
                  <label >correo</label>
                  <input name="correo" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter correo" value="<?php echo set_value('correo'); ?>">
                  <?php echo '<span class="help-block">'.form_error('correo').'</span>';?>                  
                </div>
                  
                 <div class="form-group <?php echo (form_error('cel')==null)?'':'has-error'; ?> ">
                  <label >celular</label>
                  <input name="cel" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter cel" value="<?php echo set_value('cel'); ?>">
                  <?php echo '<span class="help-block">'.form_error('cel').'</span>';?>
                </div>
                  
                <div class="form-group <?php echo (form_error('pasword')==null)?'':'has-error'; ?> ">
                  <label >pasword</label>
                  <input name="pasword" type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter pasword" value="<?php echo set_value('pasword'); ?>">
                  <?php echo '<span class="help-block">'.form_error('pasword').'</span>';?>
                </div>
                  
                <div class="form-group <?php echo (form_error('foto')==null)?'':'has-error'; ?> ">
                  <label >foto</label>
                  <input name="foto" type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter Sinopsis" value="<?php echo set_value('foto'); ?>">

                   <?php echo '<span class="help-block">'.form_error('duracion').'</span>';?>
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