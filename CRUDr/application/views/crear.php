
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









            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">General Elements</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php $attributes=array('autocomplete'=>'off'); echo form_open_multipart('Datos/crear',$attributes);?>
                        <?php echo validation_errors();?>
                        <!-- text input -->
                        <div class="form-group <?php echo (form_error('nombre') == null) ? '' : 'has-error'; ?>">
                            <label>nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="Enter nombre..."value="<?php echo set_value('nombre') ?>">
                            <?php echo '<span class="help-block">' . form_error('nombre') . '</span>'; ?>
                        </div>

                        <div class="form-group <?php echo (form_error('apellido') == null) ? '' : 'has-error'; ?>">
                            <label>apellido</label>
                            <input name="apellido" type="text" class="form-control" placeholder="Enter apellido..." value="<?php echo set_value('apellido') ?>">
                            <?php echo '<span class="help-block">' . form_error('apellido') . '</span>'; ?>
                        </div>

                        <div class="form-group <?php echo (form_error('celular') == null) ? '' : 'has-error'; ?>">
                            <label>celular</label>
                            <input name="celular" type="text" class="form-control" placeholder="Enter celular..." value="<?php echo set_value('celular') ?>">
                            <?php echo '<span class="help-block">' . form_error('celular') . '</span>'; ?>
                        </div>


                        <!-- textarea --> 
                        <div class="form-group <?php echo (form_error('opinion') == null) ? '' : 'has-error'; ?>">
                            <label>opinion</label>
                            <textarea name="opinion" class="form-control" rows="3" placeholder="Enter opinion ..." ><?php echo set_value('opinion') ?></textarea>
                            <?php echo '<span class="help-block">' . form_error('opinion') . '</span>'; ?>
                        </div>

                        <div class="form-group <?php echo (form_error('gustos') == null) ? '' : 'has-error'; ?>">
                            <label>gustos</label>
                            <input name="gustos" type="text" class="form-control" placeholder="Enter gustos..." value="<?php echo set_value('gustos') ?>">
                            <?php echo '<span class="help-block">' . form_error('gustos') . '</span>'; ?>
                        </div>


                        <div class="form-group <?php echo (form_error('pais') == null) ? '' : 'has-error'; ?>"> 
                            <label>pais</label> 
                            <select name="pais" class="form-control">
                                <option value="">seleccione el pais </option>
                                <?php foreach ($infoPais as $pais){?>                                
                                <option value="<?php  echo $pais['ID'];?>" <?php  echo set_select('pais',$pais['ID']);?>><?php  echo $pais['nombrePais'];?></option>                                 
                                <?php } ?>
                                </select> 
                                <?php echo '<span class="help-block">' . form_error('pais') . '</span>'; ?>
                            
                        </div> 
                        
                        <div class="form-group <?php echo (form_error('pelicula')==null)?'':'has-error';?>"> 
                            <label>Pelicula</label>
                            
                            <select name="pelicula" class="form-control"> 
                                <option value="">seleccione la pelicula </option>
                                <?php foreach ($infoPelicula as $peli){?>                                
                                <option value="<?php  echo $peli['ID'];?>"<?php echo set_select('pelicula',$peli['ID'])?>><?php  echo $peli['nombrePelicula'];?></option>                                 
                                <?php } ?>
                            </select> 
                            <?php echo '<span class="help-block">' . form_error('pelicula') . '</span>'; ?>
                        </div> 
                        
                        <div class="form-group <?php (form_error('foto')==null)?'':'has-error';?> >">
                            <label>foto</label>
                            <input name="foto" type="file" class="form-control" placeholder="Enter celular..." value="">
                            <?php echo '<span class="help-block">' . '' . '</span>'; ?>
                        </div>
                        
                        <div class="form-group <?php echo (form_error('password') == null) ? '' : 'has-error'; ?>">
                            <label>password</label>
                            <input name="password" type="text" class="form-control" placeholder="Enter password..." value="<?php echo set_value('password') ?>">
                            <?php echo '<span class="help-block">' . form_error('password') . '</span>'; ?>
                        </div>
                        
                        <div class="form-group <?php echo (form_error('email') == null) ? '' : 'has-error'; ?>">
                            <label>email</label>
                            <input name="email" type="text" class="form-control" placeholder="Enter email..." value="<?php echo set_value('email') ?>">
                            <?php echo '<span class="help-block">' . form_error('email') . '</span>'; ?>
                        </div>




                      
                        <button type="submit" class="btn  btn-success">enviar</button>
                    </form>
                </div>
                <!-- /.box-body -->














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
