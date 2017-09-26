
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

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th><h4><p class="text-light-blue">ID</p></h4></th>
                        <th><h4><p class="text-light-blue">Nombre</p></h4></th>
                        <th><h4><p class="text-light-blue">correo</p></h4></th>
                        <th><h4><p class="text-light-blue">pasword</p></h4></th>
                        <th><h4><p class="text-light-blue">foto</p></h4></th>
                       
                    </tr>
                    <?php foreach ($informacion as $informacion_item) { ?>
                        <tr>
        
        
                            <th><?php echo $informacion_item['id']; ?></th>
                            <th><?php echo $informacion_item['nombre']; ?></th>
                            <th><?php echo $informacion_item['correo']; ?></th>
                            <th><?php echo $informacion_item['pasword']; ?></th>
                            <th><?php echo $informacion_item['foto']; ?></th>
                            

                            <th><a href="<?php echo site_url('Datos/eliminar/' . $informacion_item['id']); ?>"><button type="button" class="btn  btn-danger">eliminar</button></a></th>
                            <th><a href="<?php echo site_url('Datos/editar/' . $informacion_item['id']); ?>"><button type="button" class="btn  btn-warning">editar</button></a></th>
                        </tr>
                    <?php } ?>

                </table>
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
