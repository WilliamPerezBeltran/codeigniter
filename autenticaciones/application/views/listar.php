a<!-- Content Wrapper. Contains page content -->
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

    <!-- Main content -->A
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
           <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>NOMBRE</th>
                  <th>CORREO</th>
                  <th>CELULAR</th>
                  <th>FOTO</th>                  
                </tr>
                <?php foreach ($info as $intem_info){ ?>
                <tr>
                  <th><?php echo $intem_info['id']; ?></th>
                  <th><?php echo $intem_info['nombre']; ?></th>
                  <th><?php echo $intem_info['correo']; ?></th>
                  <th><?php echo $intem_info['cel']; ?></th>
                  <th><?php echo site_url('imagenes/usuarios/'.$intem_info['foto']); ?></th>                   
                  <td> <a href="<?php echo site_url('controladorAutenticaciones/eliminar/'.$intem_info['id']);?>"><button type="button" class="btn btn-block btn-danger ">eliminar</button></a></td>
                  <td><button type="button" class="btn btn-block btn-warning">editar</button></td>
                  
               
                </tr>
                <?php } ?>
              </table>
            </div>
          
         
                 
                 
              
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