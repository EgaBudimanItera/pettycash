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
              <h3 class="box-title">Detail Pengeluaran Kas</h3>

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
              <table class="table">
                  <tr>
                    <td>
                      MEGA AUTO CENTRAL FINANCE
                    </td>
                    <td align="right">
                      MEGA AUTO FINANCE
                    </td>
                  </tr>  
                  <tr>
                    <td colspan="2" align="center">
                      <strong>FORM PERMINTAAN PENGELUARAN</strong>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <table border="0" width="100%">
                        <tr>
                          <td width="70%">&nbsp</td>
                          <td>Nomor</td>
                          <td>:</td>
                          <td><?=$listatas->nopengeluaran?></td>
                        </tr>
                        <tr>
                          <td width="70%">&nbsp</td>
                          <td>Tanggal</td>
                          <td>:</td>
                          <td><?php echo date_format(date_create($listatas->tanggal),'d M Y')?></td>
                        </tr>
                        <tr>
                          <td width="70%">&nbsp</td>
                          <td>Bagian</td>
                          <td>:</td>
                          <td><?=$listatas->namaunit?></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">Jenis Pengeluaran</td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <center>
                        <table border="1" width="100%">
                          <tr>
                            <td>
                              <br>
                              <?php
                                if($dinas=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp Perjalanan Dinas
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp Perjalanan Dinas
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                              <?php
                                if($rt=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp Rumah Tangga
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp Rumah Tangga
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                              <?php
                                if($atk=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp ATK
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp ATK
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                              <?php
                                if($beabank=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp Bea Bank
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp Bea Bank
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                              <?php
                                if($biayapos=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp Biaya Pos
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp Biaya Pos
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                            </td>
                            <td>
                              <br>
                              <?php
                                if($sampah=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp Biaya Sampah
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp Biaya Sampah
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                              <?php
                                if($airbersih=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp Biaya Air Bersih
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp Biaya Air Bersih
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                              <?php
                                if($jagamalam=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp Iuran Jaga Malam
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp Iuran Jaga Malam
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                              <?php
                                if($koran=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp Biaya Koran
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp Biaya Koran
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                              <?php
                                if($parkir=='1'){
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak1.jpg" width="20" height="20"> &nbsp Biaya Parkir
                              <?php
                                }else{
                              ?>
                              &nbsp<img src="<?=base_url()?>assets/kotak0.png" width="20" height="20"> &nbsp Biaya Parkir
                              <?php
                                }
                              ?>
                              <br>
                              <br>
                            </td>
                          </tr>
                        </table>  
                      </center>
                    </td>
                  </tr> 
                  <tr>
                    <td colspan="2">
                      <table width="100%" border="0">
                        <tr>
                          <td width="15%">Sebesar</td>
                          <td width="5%">:</td>

                          <td width="50%"><?php echo 'Rp. '.number_format($listatas->total)?></td>
                          <td width="30%">&nbsp</td>
                        </tr>
                        <tr>
                          <td>&nbsp</td>
                          <td>&nbsp</td>
                          <td colspan="2">(<?=$terbilang?> Rupiah)</td>
                        </tr>
                        <tr>
                          <td colspan="4">&nbsp</td>
                        </tr>
                        
                        <tr>
                          <td colspan="4">Untuk Keperluan :</td>
                        </tr>
                        <tr>
                          <td colspan="4">
                            <table border="1px" width="100%">
                              <tr>
                                <td align="center" width="5%"><b>No</b></td>
                                <td align="center" width="65%"><b>Keterangan</b></td>
                                <td align="center" width="30%"><b>Jumlah(Rp)</b></td>
                              </tr>
                              <?php
                                $no=1;
                                foreach($listdetail as $l){
                              ?>
                              <tr>
                                <td align="center"><?=$no++?></td>
                                <td>&nbsp<?=$l->keterangan?></td>
                                <td align="right"><?php echo number_format($l->jkeluar)?></td>
                              </tr>
                              <?php
                                }
                              ?>
                            </table> 
                          </td>
                        </tr>
                        <tr>
                          <td colspan="4">&nbsp</td>
                        </tr>
                        <tr>
                          <td colspan="4">&nbsp</td>
                        </tr>
                        <tr>
                          <td colspan="4">
                            <table width="100%" border="0">
                              <tr>
                                <td width="5%"></td>
                                <td width="40%" align="center">Diminta Oleh</td>
                                <td width="40%" align="center">Diperiksa Oleh</td>
                                <td width="5%"></td>  
                              </tr>
                              <tr>
                                <td colspan="4">&nbsp</td>
                              </tr>
                              <tr>
                                <td colspan="4">&nbsp</td>
                              </tr>
                              <tr>
                                <td colspan="4">&nbsp</td>
                              </tr>
                              <tr>
                                <td width="5%"></td>
                                <td width="40%" align="center"><?=$listatas->dimintaoleh?></td>
                                <td width="40%" align="center"><?=$listatas->verifikasiby?></td>
                                <td width="5%"></td>  
                              </tr>
                            </table>
                          </td>
                        </tr> 
                      </table>
                    </td>
                  </tr> 
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