
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Title</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">









            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">General Elements</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                     <?php $attributes = array('autocomplete' => 'off'); echo form_open_multipart('Datos/crearArchivo',$attributes);?>

                        <!-- text input -->
                        <div class="form-group <?php echo (form_error('nombre')==null)?'':'has-error';?>">
                            <label>nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="Enter nombre..."value="">
                            <?php echo '<span class="help-block">' .form_error('nombre') . '</span>'?>
                        </div>
                        
                        <div class="form-group <?php echo (form_error('foto')==null)?'':'has-error';?>">
                            <label>nombre</label>
                            <input name="foto" type="file" class="form-control" placeholder="Enter nombre..."value="">
                            <?php echo '<span class="help-block">' .form_error('foto') . '</span>'?>
                        </div>
                   <button type="submit" class="btn  btn-success">enviar</button>
                    </form>
                </div>
                <!-- /.box-body -->














            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <!-- Footer-->
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

</section>
<!-- /.content -->
