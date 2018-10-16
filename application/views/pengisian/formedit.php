<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data Pengisian Kas
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
            <form action="<?=base_url()?>pengisiankas/prosesedit" role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Pengisian Kas</label>
                    <input type="text" class="form-control" value="<?=$list->nopengisian?>" readonly name="nopengisian" placeholder="No Pengisian Kas">
                    <input type="hidden" class="form-control" value="<?=$list->idkas?>" readonly name="idkas">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pengisian</label>
                    
                      <input type="text" readonly class="form-control" value="<?=$list->tanggal?>" name="tanggal">
                    
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pengisian Kas</label>
                    <input type="number" class="form-control" readonly value="<?=$list->jmasuk?>" name="jmasuk" placeholder="Jumlah Pengisian Kas">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Diverifikasi Oleh</label>
                    <input type="text" class="form-control" readonly value="<?=$list->verifikasiby?>" name="verifikasiby" placeholder="Nama Verifikator">
                  </div> 
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Memo Permintaan Pembayaran</label>
                    <input type="file" class="form-control" name="file1" id="file1preview">
                    <span>
                      <?=$list->file1?>
                    </span>
                    <input type="hidden" class="form-control" value="<?=$list->file1?>" name="file1isi">
                  </div>
                  <div class="form-group">
                    <img src="<?=base_url()?>assets/file_upload/<?=$list->file1?>" id="gambar1" width="200" alt="Preview Gambar" />
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Berita Acara Pengisian Kas</label>
                    <input type="file" class="form-control" name="file2" id="file2preview">
                    <span>
                      <?=$list->file2?>
                    </span>
                    <input type="hidden" class="form-control" value="<?=$list->file2?>" name="file2isi">
                  </div>
                  <div class="form-group">
                    <img src="<?=base_url()?>assets/file_upload/<?=$list->file2?>" id="gambar2" width="200" alt="Preview Gambar" />
                  </div> -->
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