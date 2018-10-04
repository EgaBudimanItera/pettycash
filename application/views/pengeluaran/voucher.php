
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table {
    border-collapse: collapse;
}
td.garis {
  border-bottom: 1pt solid black;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Voucher Pengeluaran</title>
</head>
<body onload="window.print()" background="<?=base_url()?>/assets/bgh.jpg" >
	<table width="100%" border="1px">
      <tr>
        <td colspan="2">
          MEGA AUTO CENTRAL FINANCE
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
            <table border="1" width="90%">
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
                <center>
                	<table border="1px" width="90%">
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
                </center>
                
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
</body>
</html>

