

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
                                  
                                    
                                    
                                  <form action="" method="POST">
                                    <?php echo validation_errors(); ?>
                                    
                                      <div class="form-group <?php echo ( form_error('nombre')==null  )?'':'has-error';?>">                                         
                                            <label>nombre</label>
                                            <input name="nombre" type="text" class="form-control" placeholder="Enter ..." value="<?php echo set_value('nombre',$getdatos['nombre']) ?>"/>
                                            <?php echo '<label class="control-label" for="inputError"><i></i>'. form_error('nombre').'</label>'; ?>
                                        </div>
                                      <div class="form-group <?php echo(form_error('telefono')==null)?'':'has-error';  ?> ">
                                            <label>telefono</label>
                                            <input name="telefono" type="text" class="form-control" placeholder="Enter ..." value="<?php echo set_value('telefono',$getdatos['telefono']) ?>"/>
                                            <?php echo '<label class="control-label" for="inputError"><i></i>'. form_error('telefono').'</label>'; ?>
                                        </div>
                                    
                                     <div class="form-group <?php echo ( form_error('celular')==null  )?'':'has-error';?>">
                                            <label>celular</label>
                                            <input  name="celular"type="text" class="form-control" placeholder="Enter ..." value="<?php echo set_value('celular',$getdatos['celular']) ?>"/>
                                            <?php echo '<label class="control-label" for="inputError"><i></i>'. form_error('celular').'</label>'; ?>
                                        </div>
                                    
                                     <div class="form-group <?php echo ( form_error('correo')==null  )?'':'has-error';?>">
                                            <label>correo</label>
                                            <input name="correo" type="text" class="form-control" placeholder="Enter ..." value="<?php echo set_value('correo',$getdatos['correo']) ?>"/>
                                            <?php echo '<label class="control-label" for="inputError"><i></i>'. form_error('correo').'</label>'; ?>
                                        </div>
                                    
                                     <div class="form-group <?php echo ( form_error('direccion')==null  )?'':'has-error';?>">
                                            <label>direccion</label>
                                            <input name="direccion" type="text" class="form-control" placeholder="Enter ..." value="<?php echo set_value('direccion',$getdatos['direccion']) ?>"/>
                                            <?php echo '<label class="control-label" for="inputError"><i></i>'. form_error('direccion').'</label>'; ?>
                                        </div>
                                    
                                     
                                    
                                    
                                    
                                     <div class="form-group <?php echo ( form_error('pasatiempo')==null  )?'':'has-error';?> ">
                                            <label>pasatiempo</label>
                                            <textarea  name="pasatiempo" class="form-control" rows="3" placeholder="Enter ..."><?php echo set_value('pasatiempo',$getdatos['pasatiempo']) ?></textarea>
                                            <?php echo '<label class="control-label" for="inputError"><i></i>'. form_error('pasatiempo').'</label>'; ?>
                                        </div>
                                    
                                    
                                     <div class="form-group <?php echo ( form_error('paisrbd')==null  )?'':'has-error';?>">
                                            <label>pais</label>
                                            <select   name="paisrbd"class="form-control">
                                               
                                                <?php foreach ($pais as $listaPaises){ ?>
                                                <option value="<?php echo $listaPaises['ID'] ?>" <?php echo set_select('paisrbd',$listaPaises['ID'],($listaPaises['ID']==$getdatos['idPaises'])?true:false     );  ?> ><?php echo $listaPaises['pais'] ?> </option>
                                                <?php } ?>
                                                <?php echo '<label class="control-label" for="inputError"><i></i>'. form_error('paisrbd').'</label>'; ?>
                                            </select>
                                        </div>
                                      
                                      
                                     
                                      
                                    
                                    <td><button type="submit" class="btn btn-warning">enviar</button></td>

                                    
                                  </form>
                                    
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
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           
       