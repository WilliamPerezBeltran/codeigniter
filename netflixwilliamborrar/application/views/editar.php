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
          
          
          
        
          <form method="POST" role="form">
           
              <div class="box-body">
                <div class="form-group">
                  <label >Titulo</label>
                  <input name="titulo" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo de la pelicula" value="<?php echo $documental['tituloOriginal'];?>">                 
                </div>
                 <div class="form-group">
                  <label >Estreno</label>
                  <input name="estreno" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter estreno" value="<?php echo $documental['estreno'];?>" >
                </div>
                 <div class="form-group">
                  <label >Año</label>
                  <input name="año" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Año"value="<?php echo $documental['año'];?>">
                </div>
                <div class="form-group">
                  <label >Duracion</label>
                  <input name="duracion" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Año"value="<?php echo $documental['duracion'];?>">
                </div>
                <div class="form-group">
                  <label >Sinopsis</label>
                  <input name="Sinopsis" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Año"value="<?php echo $documental['sinopsis'];?>">
                </div>
                <div class="form-group">
                  <label >Trailer</label>
                  <input name="trailer" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Año"value="<?php echo $documental['trailer'];?>">
                </div>
                 
                  <div class="form-group">
                  <label>Pais</label>                 
                  <select name="idPais" class="form-control">
                      <?php foreach ($paises as $pais){ ?>
                      <option  value="<?php  echo $pais['ID'] ;?>" ><?php echo $pais['nombre'] ;?></option>
                            <?php } ?>           
                  </select>                  
                </div>
                
                
               
                
                
              
                <button type="submit" class="btn btn-primary">enviar</button>
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