<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengisian Kas
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
         <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">List Pengisian Kas</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="widget-body">
                <a href="<?=base_url()?>pengisiankas/formtambah" class="btn btn-danger">Tambah Data Pengisian Kas</a>
              </div>  
              
            </div>
            <!-- <div class="box-body">
              <div id="info-alert"><?=@$this->session->flashdata('msg')?></div> 
            </div> -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Pengisian Kas</th>
                      <th>Tanggal</th>
                      <th>Jumlah Pengisian</th>
                      <th>Sisa Kas</th>
                      <th>Status Kas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach($list as $l){
                        $status=$l->status;
                        if($status=='0'){
                          $statuse='Closed';
                        }else{
                          $statuse='Open';
                        }
                    ?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$l->nopengisian?></td>
                      <td><?=$l->tanggal?></td>
                      <td><?=$l->jmasuk?></td>
                      <td><?=$l->sisa?></td>
                      <td><?=$statuse?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-warning" href="<?=base_url()?>pengisiankas/formedit/<?=$l->idkas?>"><i class="fa fa-pencil"></i></a>
                        <?php
                        if($a=="0"){
                        ?>
                        <a data-toggle="tooltip" data-placement="bottom" title="Ubah Status" class="btn btn-success" href="<?=base_url()?>pengisiankas/prosesopen/<?=$l->idkas?>" onclick="return confirm('yakin akan mengaktifkan kembali kas ini?')" )"><i class="fa fa-laptop"></i></a>
                        <?php
                        }
                        ?>
                        <?php
                        if($l->status=="1"){
                        ?>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>pengisiankas/proseshapus/<?=$l->idkas?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
                        <?php
                        }
                        ?>
                        
                      </td>
                    </tr>
                    <?php    
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper