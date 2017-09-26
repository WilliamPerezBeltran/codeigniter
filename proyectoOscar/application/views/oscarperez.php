

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                 
                        <small>
                            
                          
                            
                            
                            
                            
           <style type="text/css">
                       .wil{
                       border: 1px solid black;
                       width: 500px;
                       height: 300px;

                     }
                     .cel{
                       border: 1px solid black;
                       width: 310px;
                       height: 400px;

                     }
                     .foto{
                       border: 1px solid black;
                       width: 310px;
                       height: 300px;

                     }
                     .nombre{
                       border: 1px solid black;
                       width: 310px;
                       height: 40px;

                     }
                     
                     
          </style>
      
          
                            
             
             
             
             
             
             
             
             
             
           
             
             
             
             
             
                     
                            
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
                                        
                                        
                                        <?php foreach ($oscar as $oscarpintura) { ?>
                                  
                                         <TABLE >

                                                <TR>
                                                    <TH><img id="pintura<?php echo $oscarpintura['idPintura']?>" onmouseout="mi_funcion7('<?php echo $oscarpintura['idPintura']?>')" onmouseover="mi_funcion6('<?php echo $oscarpintura['idPintura']?>')" src="<?php echo base_url('pintura/'.$oscarpintura['idPintura'].'.jpg') ?>  "height="300px"  width="300px" class="img-circle" alt="User Image"></TH> 

                                                </TR>
                                                <TR>
                                                        <TD align="left"><?php echo $oscarpintura['nombre'];  ?></TD> 
                                                </TR>
                                                <TR>
                                                        <TD align="left"><?php echo $oscarpintura['simbolo'];  ?></TD> 
                                                </TR>
                                                <TR>
                                                        <TD align="left"><?php  echo$oscarpintura['precio'];  ?></TD> 
                                                </TR>
                                                

                                        </TABLE>
                                       
                                         
                                         <?php  } ?>
                                        
                                        
                                        
                                     
                                      
                                    
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    
        <script >
            
            function mi_funcion1(){
                document.getElementById('midiv1').style.borderColor='blue';           
            }
            
            function mi_funcion2(){
                document.getElementById('midiv2').style.borderStyle='dashed';;
                document.getElementById('midiv2').style.borderWidth='20px';
                document.getElementById('midiv2').style.borderColor ='red';
                document.getElementById('midiv2').style.borderTopWidth  ='50px';
            }
            function mi_funcion3(){
                document.getElementById('imagen').src='https://i.ytimg.com/vi/kUsxMXwCW8A/maxresdefault.jpg';      
            }
            function mi_funcion4(){
                document.getElementById('midiv3').style.display='inline';      
            }
            
            function mi_funcion5(){
                var hola='hola william estamos en la varialbe<br>';
                var a,b;
                a=12;
                b=45;
                document.write('hi william we are studing programing exactly javascrip happy happy<br>');
                document.write(hola);
            }
            
            function mi_funcion6(id){
                /* document.getElementById('pintura').src='   <?php //echo base_url('proyectoOscar/pintura/')?>'+id+'.jpg';*/
                document.getElementById('pintura'+id).style.height='350px';
                document.getElementById('pintura'+id).style.width='350px';
            }
           function mi_funcion7(id){
                /* document.getElementById('pintura').src='   <?php //echo base_url('proyectoOscar/pintura/')?>'+id+'.jpg';*/
                document.getElementById('pintura'+id).style.height='300px';
                document.getElementById('pintura'+id).style.width='300px';
            }

       </script>    

                            
                          
             <?php // echo base_url('pintura/'+oscarimg+'jpg') ?>               
                            
                            
                            
                            
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
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           
       