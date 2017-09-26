
                                    <form method="POST" role="form">
                                        
                                        <?php echo validation_errors();?>
                                        
                                        
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input name="nombre" type="text" class="form-control" placeholder=" escriba su nombre aqui..." value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input name="telefono"  type="text" class="form-control" placeholder="escriba su telefono aqui ..." value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input name="celular" type="text" class="form-control" placeholder="escriba su celular aqui ..." value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input name="correo" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Direccion</label>
                                            <input  name="direccion" type="text" class="form-control" placeholder="escriba su direccion aqui ..." value=""/>
                                        </div>
                                       
                                        

                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea  name="pasatiempo"class="form-control" rows="3" placeholder="escriba su pasa tiempo aqui ..." value=""></textarea>
                                        </div>
                                        
                                       

                                        <button  class="btn btn-primary">Enviar</button></td>
                                        
                                    </form>
                                