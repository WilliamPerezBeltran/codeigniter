
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





<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th><h4><p class="text-light-blue">ID</p></h4></th>
                        <th><h4><p class="text-light-blue">Nombre</p></h4></th>
                        <th><h4><p class="text-light-blue">apellido</p></h4></th>
                        <th><h4><p class="text-light-blue">celular</p></h4></th>
                        <th><h4><p class="text-light-blue">opinion</p></h4></th>
                        <th><h4><p class="text-light-blue">gustos</p></h4></th>
                        <th><h4><p class="text-light-blue">pais</p></h4></th>
                        <th><h4><p class="text-light-blue">peliculas</p></h4></th>
                       
                    </tr>
                    <?php foreach ($informacion as $informacion_item) { ?>
                        <tr>
        
        
                            <th><?php echo $informacion_item['idInformacion']; ?></th>
                            <th><?php echo $informacion_item['informacionnombre']; ?></th>
                            <th><?php echo $informacion_item['informacionapellido']; ?></th>
                            <th><?php echo $informacion_item['informacioncelular']; ?></th>
                            <th><?php echo $informacion_item['informacionopinion']; ?></th>
                            <th><?php echo $informacion_item['informaciongustos']; ?></th>
                            <th><?php echo $informacion_item['paisnombrePais']; ?></th>
                            <th><?php echo $informacion_item['peliculanombrePelicula']; ?></th>

                            <th><a href="<?php echo site_url('Datos/eliminar/' . $informacion_item['idInformacion']); ?>"><button type="button" class="btn  btn-danger">eliminar</button></a></th>
                            <th><a href="<?php echo site_url('Datos/editar/' . $informacion_item['idInformacion']); ?>"><button type="button" class="btn  btn-warning">editar</button></a></th>


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
