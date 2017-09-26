<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Pagina william</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="AdminLTE-2.3.5/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-2.3.5/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="AdminLTE-2.3.5/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">


 

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
 
 
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left:0px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        pagian william
        <small>iniciamos</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        
        <div class="box-body">








            <div class="box box-warning">
             
              <!-- /.box-header -->
              <div class="box-body">
                <form action="guardarDatosformulario.php" method="POST" role="form" onsubmit="return mifuncion();">
                  <!-- text input -->

                  <div class="form-group">
                    <label>Nombres</label>
                    <input id="primer1" type="text" name="primerNombre" class="form-control" placeholder="Deme su primer nombre .." value="">
                    <input id="segundoNombre" type="text" name="segundoNombre" class="form-control" placeholder="Deme su segundo nombre.." value="">
                  </div>

                  <div class="form-group">
                    <label>Apellidos</label>
                    <input id="primerApellido" type="text" name="primerApellido" class="form-control" placeholder="Deme su primer apellido .." value="">
                    <input id="segundoApellido" type="text" name="segundoApellido" class="form-control" placeholder="Deme su segundo apellido.." value="">
                  </div>

                  <div class="form-group">
                    <label>celular</label>
                    <input id="celular" type="text" name="celular" class="form-control" placeholder="Deme su celular .." value="">             
                  </div>

                  <div class="form-group">
                    <label>E-mail</label>
                    <input id="email" type="text" name="email" class="form-control" placeholder="Deme su Email .." value="">
                  </div>

                  <div class="form-group">
                    <label>Edad</label>
                    <input id="edad" type="text" name="edad" class="form-control" placeholder="Deme su edad .." value="">
                  </div>

                  <div class="form-group">
                    <label>recomendaria la pagina </label>
                    <input id="recomendacion" type="text" name="recomendacion" class="form-control" placeholder="Deme su Email .." value="">
                  </div>

                  <div class="form-group">
                  <label>Select</label>
                  <select id ="seleccione" name="seleccione" class="form-control" >
                    <option value="seleccion">seleccione</option>
                    <option value="maleta">maleta</option>
                    <option value="carro">carro</option>
                    <option value="mouse">mouse</option>
                    <option value="tractomula">tractomula 5</option>
                  </select>
                </div>

                  <button>submit </button>


                  


                 


                </form>
              </div>
              <!-- /.box-body -->
          </div>
          


        </div>
        <!-- /.box-body -->
      
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script type="text/javascript">

      function mifuncion(){
        //alert ('Entro');
       // alert (document.getElementById('primer1').value);
        
        if(document.getElementById('primer1').value == '' )
        {
            alert ('Por favor digite el primer nombre');
            return false;
        }
if(document.getElementById('segundoNombre').value == '' )
        {
            alert ('Por favor digite el segundo Nombre');
            return false;
        }
if(document.getElementById('primerApellido').value == '' )
        {
            alert ('Por favor digite el primer apellido');
            return false;
        }
if(document.getElementById('celular').value == '' )
        {
            alert ('Por favor digite el celular');
            return false;
        }
if(document.getElementById('email').value == '' )
        {
            alert ('Por favor digite el email ');
            return false;
        }
if(document.getElementById('edad').value == '' ||    isNaN(document.getElementById('edad').value)==true )
        {
            alert ('Por favor digite su edad');
            return false;
        }
if(document.getElementById('recomendacion').value == '' )
        {
            alert ('Por favor digite su recomendacion');
            return false;
        }
if(document.getElementById('seleccione').value == '' )
        {
            alert ('Por favor digite el primer nombre');
            return false;
        }



      }


  

</script>


<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
