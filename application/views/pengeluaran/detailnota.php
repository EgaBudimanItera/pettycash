<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Nota Pengeluaran Kas
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
         <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">List Nota Pengeluaran Kas Kecil</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <!-- <div class="box-body">
              <div id="info-alert"><?=@$this->session->flashdata('msg')?></div> 
            </div> -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Pengeluaran Kas</th>
                      <th>Keterangan</th>
                      <th>File</th>
                      
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
                      <td><?=$l->ket?></td>
                      <td><?=$l->namafile?></td>
                      
                      <td>
                        <a data-toggle="tooltip" data-placement="bottom" title="Download" target="_blank"class="btn btn-warning" href="<?=base_url()?>pengeluarankas/download/<?=$l->namafile?>")"><i class="fa fa-download"></i></a>
                        
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