<?php
  $userHakakses=$this->session->userdata('userHakakses');
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->session->userdata('userNama')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($link=='beranda'){echo'active';}?>"><a href="<?=base_url()?>berandaadmin"><i class="fa fa-home"></i> Home</a></li>
       
        <li class="<?php if($link=='unit' ||$link=="jenispengeluaran"){echo'active';}?> treeview">
          <a href="#">
            <i class="fa fa-industry"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($link=='unit'){echo'active';}?>"><a href="<?=base_url()?>unit"><i class="fa fa-cubes"></i> Unit PT MAF</a></li>
            <li class="<?php if($link=='jenispengeluaran'){echo'active';}?>"><a href="<?=base_url()?>jenispengeluaran"><i class="fa fa-server"></i> Jenis Pengeluaran</a></li>
            

            <?php
             if($userHakakses=="Pimpinan"){
            ?>
            <li class="<?php if($link=='user'){echo'active';}?>"><a href="<?=base_url()?>user"><i class="fa fa-users"></i> Users</a></li>
            <?php
             }
            ?>
            
          </ul>
        </li>
        <li class="<?php if($link=='pengisian' ||$link=="pengeluaran"){echo'active';}?> treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Data Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($link=='pengisian'){echo'active';}?>"><a href="<?=base_url()?>pengisiankas"><i class="fa fa-map"></i> Pengisian Petty Cash</a></li>
            <li class="<?php if($link=='pengeluaran'){echo'active';}?>"><a href="<?=base_url()?>pengeluarankas"><i class="fa fa-desktop"></i> Pengeluaran Petty Cash</a></li>
          </ul>
        </li>

        <li class="<?php if($link=='laporan'){echo'active';}?> treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($link=='laporan'){echo'active';}?>"><a href="<?=base_url()?>laporan"><i class="fa fa-briefcase"></i> Petty Cash</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>