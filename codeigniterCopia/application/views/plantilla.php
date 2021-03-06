<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url("AdminLTE-2.3.5/bootstrap/css/bootstrap.min.css")?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("AdminLTE-2.3.5/dist/css/AdminLTE.min.css")?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("AdminLTE-2.3.5/dist/css/skins/_all-skins.min.css")?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- 
        aqui estaba el header 
    -->

   <!-- aqui estaba el header  -->

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  
        <!-- 
           Aqui estaba el aside
        -->

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
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
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            
            
            
            
          Start creating your amazing application!
          <table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>countryCode</td>
        <td>District</td>
        <td>Population</td>     
    </tr>
    <?php foreach ($ciudades as $ciudad){ ?>
    
    <tr>
        <td><?php echo $ciudad['ID'];?></td>
        <td><?php echo $ciudad['Name'];?></td>
        <td><?php echo $ciudad['CountryCode'];?></td>
        <td><?php echo $ciudad['District'];?></td>
        <td><?php echo $ciudad['Population'];?></td>     
    </tr>
    
    <?php } ?>
</table>
          
          
          
          
          
          
          
          
          
          
          
          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.5
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
   
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url("AdminLTE-2.3.5/plugins/jQuery/jquery-2.2.3.min.js")?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url("AdminLTE-2.3.5/bootstrap/js/bootstrap.min.js")?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url("AdminLTE-2.3.5/plugins/slimScroll/jquery.slimscroll.min.jsdocumentation/index.html")?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url("AdminLTE-2.3.5/plugins/fastclick/fastclick.js")?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("AdminLTE-2.3.5/dist/js/app.min.js")?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("AdminLTE-2.3.5/dist/js/demo.js")?>"></script>
</body>
</html>
