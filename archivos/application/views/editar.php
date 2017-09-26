
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
                    <form action="<?php echo site_url('Datos/crear'); ?>" method="POST" role="form" >
                        <?php echo validation_errors();?>
                        <!-- text input -->
                        <div class="form-group <?php echo (form_error('nombre') == null) ? '' : 'has-error'; ?>">
                            <label>nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="Enter nombre..."value="<?php echo set_value('nombre',$informa['nombre']) ?>">
                            <?php echo '<span class="help-block">' . form_error('nombre') . '</span>'; ?>
                        </div>

                        <div class="form-group <?php echo (form_error('correo') == null) ? '' : 'has-error'; ?>">
                            <label>correo</label>
                            <input name="correo" type="text" class="form-control" placeholder="Enter correo..." value="<?php echo set_value('correo',$informa['correo']) ?>">
                            <?php echo '<span class="help-block">' . form_error('correo') . '</span>'; ?>
                        </div>

                        <div class="form-group <?php echo (form_error('pasword') == null) ? '' : 'has-error'; ?>">
                            <label>pasword</label>
                            <input name="pasword" type="text" class="form-control" placeholder="Enter pasword..." value="<?php echo set_value('pasword',$informa['pasword']) ?>">
                            <?php echo '<span class="help-block">' . form_error('pasword') . '</span>'; ?>
                        </div>
                        
                        <div class="form-group <?php echo (form_error('foto') == null) ? '' : 'has-error'; ?>">
                            <label>foto</label>
                            <input name="foto" type="text" class="form-control" placeholder="Enter pasword..." value="<?php echo set_value('foto',$informa['foto']) ?>">
                            <?php echo '<span class="help-block">' . form_error('foto') . '</span>'; ?>
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
