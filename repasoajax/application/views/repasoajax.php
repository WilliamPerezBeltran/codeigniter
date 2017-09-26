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
                
                <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Comentarios </h3>
                  <!-- tools box -->
                  
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <input type="text" id="fullname">
                <button type="button" id="bttHello">Click Me!</button>
              </div>
              <!-- /.box -->
              <span id="result1"></span>


            </div>
            
            
            <div class="col-m-4">
                <div id="midiv">Netflift documentales</div>
                <button id="mibuton"  class="btn  btn-success">Success</button>
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
    
    $('#bttHello').click(function () {
                    var fullname=$('#fullname').val();
                    $.ajax({
                        dataType:'json',
                        url:'<?php echo site_url('controllerAjax/hello');?>'+'/'+fullname,
                        success: function(result){
                            $('#result1').html(result);                            
                        }
                    });

                });


$('#mibuton').click(function () {
                    $.ajax({
                        url: ' <?php echo site_url('controllerAjax/ejemploAjax'); ?>',
                        dataType: 'json'

                    }).done(function (data) {
                        $('#midiv').html(data);
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
