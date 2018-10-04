<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengeluaran Kas
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
         <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">List Pengeluaran Kas</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="widget-body">
                <a href="<?=base_url()?>pengeluarankas/formtambah" class="btn btn-danger">Tambah Data Pengeluaran Kas</a>
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
                      <th>No Pengeluaran Kas</th>
                      <th>Nama Unit</th>
                      <th>Tanggal</th>
                      <th>Jumlah (Rp)</th>
                      <th>Nama Pegawai</th>
                      <th>Verifikator</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach($list as $l){
                    ?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$l->nopengeluaran?></td>
                      <td><?=$l->namaunit?></td>
                      <td><?=$l->tanggal?></td>
                      <td><?=$l->total?></td>
                      <td><?=$l->dimintaoleh?></td>
                      <td><?=$l->verifikasiby?></td>
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Detail" class="btn btn-default" href="<?=base_url()?>pengeluarankas/detail/<?=$l->nopengeluaran?>")"><i class="fa fa-eye"></i></a>
                        <a data-toggle="tooltip" data-placement="bottom" title="Detail Nota" class="btn btn-warning" href="<?=base_url()?>pengeluarankas/detailnota/<?=$l->nopengeluaran?>")"><i class="fa fa-book"></i></a>
                        <a data-toggle="tooltip" data-placement="bottom" title="Upload Nota" class="btn btn-primary" href="<?=base_url()?>pengeluarankas/upload/<?=$l->nopengeluaran?>")"><i class="fa fa-upload"></i></a>
                        <a data-toggle="tooltip" data-placement="bottom" target="_blank" title="Print Voucher" class="btn btn-success" href="<?=base_url()?>pengeluarankas/printvoucher/<?=$l->nopengeluaran?>")"><i class="fa fa-print"></i></a>
                        <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>pengeluarankas/proseshapus/<?=$l->nopengeluaran?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a>
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