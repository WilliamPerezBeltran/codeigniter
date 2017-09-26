     <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('public/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">DOCUMENTALES</li>
        
        <li><a href="<?php echo base_url('index.php/documentales/vercrear');?>"><i class="fa fa-circle-o text-red"></i> <span>crear</span></a></li>
        <li><a href="<?php echo base_url('index.php/documentales/verdocumentales');?>"><i class="fa fa-circle-o text-yellow"></i> <span>listar</span></a></li>
        <li><a href="<?php echo base_url('index.php/documentales/vercrear');?>"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>

        <li><a href="<?php echo base_url('index.php/documentales/salir');?>"><i class="fa fa-circle-o text-aqua"></i> <span>salir</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->