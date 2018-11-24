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

            <form action="<?=base_url()?>laporan/rekap" role="form" method="post" class="form-horizontal" target="_blank">
              <div class="box-body">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="col-sm-4 control-label">Dari Tanggal</label>
                    <div class="col-sm-8">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" required="" class="form-control" id="daritanggal" name="daritanggal">
                      </div>
                    </div>
                  </div> 
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="col-sm-4 control-label">Hingga Tanggal</label>
                    <div class="col-sm-8">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" required="" class="form-control" id="hinggatanggal" name="hinggatanggal">
                      </div>
                    </div>
                  </div> 
                </div>
                <div class="col-md-4">
                  <div class="widget-body"> 
                    <button type="submit" class="btn btn-success"><i class="fa fa-print"> Rekap Pengisian Kas</i></button>
                  </div>   
                </div>
                 
              </div>    
            </form>
            
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
                        
                        <a data-toggle="tooltip" data-placement="bottom" title="Memo Permohonan Penggantian" target="_blank" class="btn btn-danger" href="<?=base_url()?>laporan/mpp/<?=$l->nopengisian?>"><i class="fa fa-print"> MPP</i></a>
                        
                        <a data-toggle="tooltip" data-placement="bottom" title="Iktisar Pengeluaran" target="_blank" class="btn btn-warning" href="<?=base_url()?>laporan/iktisar/<?=$l->nopengisian?>"><i class="fa fa-print"> IP</i></a>

                        <a data-toggle="tooltip" data-placement="bottom" title="Laporan Dana Kas Kecil" target="_blank" class="btn btn-success" href="<?=base_url()?>laporan/ldkk/<?=$l->nopengisian?>"><i class="fa fa-print"> LDKK</i></a>
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