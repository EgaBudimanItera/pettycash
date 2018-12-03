
<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Nota
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
    <!-- Main content -->
    <section class="content">
      <div class="row">  
        <div class="col-xs-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Upload Nota</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" >
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <form action="<?=base_url()?>pengeluarankas/prosesupload" role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
               <div class="col-md-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan File</label>
                  <textarea name="ket" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih File</label>
                  <input type="file" class="form-control" required name="namafile"  id="file2preview" accept="image/*">
                  <input type="hidden" class="form-control" value="<?=$nopengeluaran?>" name="nopengeluaran" >
                </div>
                <div class="form-group">
                  <img src="<?=base_url()?>assets/noimage.png" id="gambar2" width="200" alt="Preview Gambar" />
                </div>
               </div>
              </div>
              <div class="box-footer">
                <button class="btn btn-warning" type="submit">Simpan Nota</button>
              </div>
            </form>
          </div>
          <!-- /.box -->    
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper-->

