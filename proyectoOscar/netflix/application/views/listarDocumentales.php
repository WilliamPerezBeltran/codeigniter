bb<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <div id="midiv">Netflift documentales</div>
            <button id="mibuton"  class="btn  btn-success">Success</button>
            <small></small>
            <div id="midivNombre">Netflift documentales</div>



            <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
            <script type="text/javascript">
                $('#mibuton').click(function () {
                    $.ajax({
                        url: ' <?php echo site_url('Documentales/ejemploAjax'); ?>',
                        dataType: 'json'

                    }).done(function (data) {
                        $('#midiv').html(data);
                    });

                });
            </script>






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











                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">lISTA DE DOCUMENTALES</h3>

                                <div class="box-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <?php
                                //var_dump($documentales); 
                                ?>
                                <table class="table table-hover">
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo original</th>
                                        <th>Estreno</th>
                                        <th>Año</th>
                                        <th>Duracion</th>
                                        <th>Sinopsis</th>
                                        <th>Trailer</th>
                                        <th>Pais</th>


                                        <th>eliminar</th>
                                        <th>editar</th>
                                    </tr>

                                    <?php foreach ($documentales as $documental_item) { ?>


                                        <tr>

                                            <th><?php echo $documental_item['documentalID']; ?></th>
                                            <th><?php echo $documental_item['documentalTituloOriginal']; ?></th>
                                            <th><?php echo $documental_item['documentalEstreno']; ?></th>
                                            <th><?php echo $documental_item['documentalTituloAño']; ?></th>
                                            <th><?php echo $documental_item['documentalDuracion']; ?></th>
                                            <th><?php echo $documental_item['documentalSinopsis']; ?></th>
                                            <th><?php echo $documental_item['documentalTrailer']; ?></th>
                                            <th><?php echo $documental_item['paisNombre']; ?></th>



                                            <th><a  href="<?php echo site_url('documentales/eliminar/' . $documental_item['documentalID']); ?>"><button type="button" class="btn btn-block btn-primary">eliminar</button></a> </th>
                                            <th><a  href="<?php echo site_url('documentales/editar/' . $documental_item['documentalID']); ?>"><button type="button" class="btn btn-block btn-primary">editar</button></a> </th>
                                            <th><button id="mibutonNombre" type="button" class="btn btn-block btn-primary" onclick="mi_function_1(<?php echo $documental_item['documentalID']; ?>)">Nombre del documental </button></th>


                                        </tr>

                                    <?php } ?>      

                                </table>

                                <script>
                                    function mi_function_1(id) {
                                        //alert(id);
                                        $.ajax({
                                            url: ' <?php echo site_url('Documentales/nombreDelDocumentalAjax') ?>/' + id,
                                            dataType: 'json'

                                        }).done(function (data) {
                                            $('#midivNombre').html(data);
                                        });

                                    }


                                </script>







                            </div>

                            <!-- /.box-body -->                    
                        </div>
                        <!-- /.box -->
                    </div>
                </div>



<div id="midiv">Netflift documentales</div>
            <button id="mibuton"  class="btn  btn-success">Success</button>
            <small></small>



            <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
            <script type="text/javascript">
                $('#mibuton').click(function () {
                    $.ajax({
                        url: ' <?php echo site_url('Documentales/ejemploAjax'); ?>',
                        dataType: 'json'

                    }).done(function (data) {
                        $('#midiv').html(data);
                    });

                });
            </script>






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