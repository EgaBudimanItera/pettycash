<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Pengisian Kas
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Pengisian Kas</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            
            <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
            <!-- /.box-header -->
            <form action="<?=base_url()?>pengisiankas/prosessimpan" role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Pengisian Kas</label>
                    <input type="text" class="form-control" value="<?=$nopengisian?>" readonly name="nopengisian" placeholder="No Pengisian Kas">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pengisian</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" required="" class="form-control" id="tglisi" name="tanggal">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pengisian Kas</label>
                    <input type="number" class="form-control"  required="" name="jmasuk" placeholder="Jumlah Pengisian Kas">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Diverifikasi Oleh</label>
                    <input type="text" class="form-control"  required="" name="verifikasiby" placeholder="Nama Verifikator">
                  </div> 
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Memo Permintaan Pembayaran</label>
                    <input type="file" class="form-control" required=""  name="file1" placeholder="Memo Permintaan Pembayaran Kas Kecil" id="file1preview">
                    
                  </div>
                  <div class="form-group">
                    <img src="<?=base_url()?>assets/noimage.png" id="gambar1" width="200" alt="Preview Gambar" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Berita Acara Pengisian Kas</label>
                    <input type="file" class="form-control" required="" name="file2" placeholder="Berita acara pengisian Kas Kecil" id="file2preview">
                    
                  </div>
                  <div class="form-group">
                    <img src="<?=base_url()?>assets/noimage.png" id="gambar2" width="200" alt="Preview Gambar" />
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  
                  <button type="submit" class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper