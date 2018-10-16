<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Pengeluaran Petty Cash
      </h1>
      <?php $this->load->view('template/breadcrumb')?>
    </section>

    <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
    <form action="<?=base_url()?>pengeluarankas/prosessimpan" role="form" method="post" class="form-horizontal">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-6">
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title"></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" >
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Pengeluaran</label>
                    <input type="text" class="form-control" value="<?=$nopengeluaran?>" readonly name="nopengeluaran" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sisa Kas</label>
                    <input type="text" class="form-control" value="<?=$sisakas->sisa?>" readonly name="sisa" >
                    <input type="hidden" class="form-control" value="<?=$sisakas->nopengisian?>" readonly name="nopengisian" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pengeluaran</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" required="" class="form-control" id="tglkeluar" name="tanggal">
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <!-- /.box -->
          </div>
          <div class="col-xs-6">
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title"></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" >
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
               <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Unit</label>
                  <select class="form-control" id="idunit" required="" name="idunit" style="width: 100%;">
                    <option value="">--Pilih Unit--</option> 
                    <?php
                      foreach($idunit as $p){
                    ?>
                    <option value="<?=$p->idunit?>"><?=$p->namaunit?></option> 
                    <?php
                      }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pegawai Penerima Kas</label>
                    <input type="text" class="form-control" value="" name="dimintaoleh" >
                  </div> 
               </div>
              </div>
              <div class="box-footer">
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#detailpengeluaranModal">Tambahkan Detail Pengeluaran
                  </a>
              </div>
            </div>
            <!-- /.box -->    
          </div>
        </div>
        <div class="row">  
          
          <div class="col-xs-6">
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Verifikasi</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" >
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
               <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Verifikator</label>
                  <input type="text" class="form-control" value="" name="verifikasiby" >
                </div>
                
               </div>
              </div>
            </div>
            <!-- /.box -->    
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-primary box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">List Pengeluaran</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" >
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div id="tampilpengeluaran">

                </div>
              </div>
              <div class="box-footer">
                <button class="btn btn-warning" type="submit">Simpan Semua Pengeluaran</button>
              </div>
            </div>
            <!-- /.box -->    
          </div> 
        </div>
      </section>
      <!-- /.content -->

    </form>
    
  </div>
  <!-- /.content-wrapper-->

<div class="modal modal-success fade" id="detailpengeluaranModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Jenis Pengeluaran</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="formTambahPengeluaran" role="form" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Jenis Pengeluaran</label>
              <div class="col-sm-8">
                <select class="form-control" id="idjenis" required="" name="idjenis" style="width: 100%;">
                  <option value="">--Pilih Jenis Pengeluaran--</option> 
                  <?php
                    foreach($idjenis as $p){
                  ?>
                  <option value="<?=$p->idjenis?>"><?=$p->namajenis?></option> 
                  <?php
                    }
                  ?>
                </select>  
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Keterangan</label>
                <div class="col-sm-8">
                  <textarea name="Keterangan" id="keterangan" class="form-control"></textarea>  
                </div>
            </div> 
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Jumlah Pengeluaran</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" id="jkeluar" name="jkeluar">
              </div>
            </div>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline" onclick="simpan()">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->