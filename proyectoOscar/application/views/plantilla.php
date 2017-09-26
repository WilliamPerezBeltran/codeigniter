

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Blank page
                        <small>
                            
                          
                            
                            
                            
                            
                            
                           
                            
                            
                                 <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Responsive Hover Table</h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>nombre</th>
                                            <th>telefono</th>
                                            <th>celular</th>
                                            <th>correo</th>
                                            <th>direccion</th>
                                            <th>pasatiempo</th>
                                            <th>pais</th>
                                            
                                        </tr>
                                        
                                   <?php foreach ($arregloinformacion as $informacion){ ?>
                                        <tr>
                                            
                                            <th><?php echo $informacion['informacionID'];?></th>
                                            <th><?php echo $informacion['informacionnombre'];?></th>
                                            <th><?php echo $informacion['informaciontelefono'];?></th>
                                            <th><?php echo $informacion['informacioncelular'];?></th>
                                            <th><?php echo $informacion['informacioncorreo'];?></th>
                                            <th><?php echo $informacion['informaciondireccion'];?></th>
                                            <th><?php echo $informacion['informacionpasatiempo'];?></th>
                                            <th><?php echo $informacion['paisespais'];?></th>
                                            <td> <a href="<?php echo site_url('Taller/eliminar/'.$informacion['informacionID']);  ?>"><button class="btn btn-danger">eliminar</button> </a> </td>
                                            <td><a href="<?php echo site_url('Taller/editar/'.$informacion['informacionID']);  ?>"<button class="btn btn-warning">editar</button></a></td>
                                        </tr>
                                        <?php }?>
                                    </table>
                                    
                                    
                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                            
                            
      
        
                            
                         
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                          
                            
                            
                            
                            
                            
                        </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           
       