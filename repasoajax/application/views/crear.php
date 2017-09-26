<style type="text/css">
      

      #div1{
        float: left;
        border:1px solid black;
        width: 150px;
        height: 35px;
      }

      #div2{

        width: 1000px;
        height: 100px;
        

      }

      #div3{
        width: 1000px;
        height: 300px;
        clear: left;
      }

      


      
    </style>
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div  class="box-header with-border">
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
                    <div   class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th><h4><p class="text-light-blue">ID</p></h4></th>
                                <th><h4><p class="text-light-blue">Nombre</p></h4></th>
                                <th><h4><p class="text-light-blue">apellido</p></h4></th>
                                <th><h4><p class="text-light-blue">celular</p></h4></th>
                                <th><h4><p class="text-light-blue">opinion</p></h4></th>
                                <th><h4><p class="text-light-blue">gustos</p></h4></th>
                                <th><h4><p class="text-light-blue">pais</p></h4></th>
                                <th><h4><p class="text-light-blue">idPeliculas</p></h4></th>
                                <th><h4><p class="text-light-blue">foto</p></h4></th>
                                <th><h4><p class="text-light-blue">password</p></h4></th>
                                <th><h4><p class="text-light-blue">email</p></h4></th>

                            </tr>
                            <tr id="mitr">
                                
                                
                            </tr>

                                                

                        </table>
                    </div>                    
                </div>
                <button id="botonAjax" type="submit" class="btn  btn-warning">botonAjax</button>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php $attributes = array('autocomplete' => 'off');
                    echo form_open_multipart('controllerAjax/crearArchivo', $attributes); ?>
                      <?php echo validation_errors(); ?>
                    <!-- text input -->
                    <div class="form-group <?php echo (form_error('nombre') == null) ? '' : 'has-error'; ?>">
                        <label>nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Enter nombre..."value="<?php echo set_value('nombre') ?>">
                        <?php echo '<span class="help-block">' . form_error('nombre') . '</span>'; ?>
                    </div>

                    <div class="form-group <?php echo (form_error('foto') == null) ? '' : 'has-error'; ?>">
                        <label>foto</label>
                        <input name="foto" type="file" class="form-control" placeholder="Enter nombre...">
                        <?php echo '<span class="help-block">' . form_error('foto') . '</span>'; ?>
                    </div>
                    <button type="submit" class="btn  btn-success">enviar</button>
                    </form>
                </div>
                <!--repaso ajax -->
                <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

                



                <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
                <script type="text/javascript">
                    $('#botonAjax').click(function () {
                        $.ajax({
                            url: '<?php echo site_url('controllerAjax/traerFilaAjax') ?>',
                            datatype: 'json'
                        }).done(function (data) {
                            data = jQuery.parseJSON(data);
                            
                            $('#mitr').html('<td>' + data['ID'] + '</td>'+'<td>' + data['nombre'] + '</td>'+'<td>' + data['apellido'] + '</td>'+'<td>' + data['celular'] + '</td>'+'<td>' + data['opinion'] + '</td>'+'<td>' + data['gustos'] + '</td>'+'<td>' + data['idPais'] + '</td>'+'<td>' + data['idPeliculas'] + '</td>'+'<td>' + data['foto'] + '</td>'+'<td>' + data['password'] + '</td>'+'<td>' + data['email'] + '</td>');
                        });
                    });

                </script>

               
















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
