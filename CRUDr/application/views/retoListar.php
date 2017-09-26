
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
                        <th><h4><p class="text-light-blue">titulo</p></h4></th>
                        <th><h4><p class="text-light-blue">apellido</p></h4></th>
                        <th><h4><p class="text-light-blue">celular</p></h4></th>
                        <th><h4><p class="text-light-blue">opinion</p></h4></th>
                        <th><h4><p class="text-light-blue">gustos</p></h4></th>
                        <th><h4><p class="text-light-blue">pais</p></h4></th>
                        <th><h4><p class="text-light-blue">peliculas</p></h4></th>
                        <th><h4><p class="text-light-blue">email</p></h4></th>
                        <th><h4><p class="text-light-blue">password</p></h4></th>
                       
                    </tr>
                    <?php foreach ($informacion as $informacion_item) { ?>
                        <tr>
        
        
                            <th><?php echo $informacion_item['id']; ?></th>
                            <th><?php echo $informacion_item['titulo']; ?></th>
                            <th><?php echo $informacion_item['sinopsis']; ?></th>
                            <th><?php echo $informacion_item['NumeroDePaginas']; ?></th>
                           
                            
                            <th><button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">  Launch demo modal</button></th>
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
