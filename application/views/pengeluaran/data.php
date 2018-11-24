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
                <a href="<?=base_url()?>pengeluarankas/formtambah" class="btn btn-danger">Tambah Data Pengeluaran Kas</a>
              </div>  
              <div id="info-alert"><?=@$this->session->flashdata('msg')?></div> 
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Pengisian Kas</th>
                    <th>Tanggal</th>
                    <th>Jumlah Pengisian</th>
                    <th>Jumlah Pengeluaran</th>
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
                    <td align="right"><?=number_format($l->jmasuk)?></td>
                    <td align="right"><?=number_format($l->jmasuk-$l->sisa)?></td>
                    <td align="right"><?=number_format($l->sisa)?></td>
                    <td><?=$statuse?></td>
                    <td>
                      <a data-toggle="tooltip" data-placement="bottom" title="Detail" class="btn btn-warning" href="<?=base_url()?>pengeluarankas/datadetail/<?=$l->nopengisian?>")"><i class="fa fa-eye"></i></a>
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