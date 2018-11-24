
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
<title>Laporan Dana Kas Kecil</title>
</head>
<body onload="window.print()" background="<?=base_url()?>/assets/bgh.jpg" >
	<font size="1px">
  <table width="100%" border="1px">
      <tr>
        <td colspan="2">
          PT. MEGA AUTO  FINANCE CABANG WAY KANAN
        </td>
        
      </tr>  
      <tr rowspan=2>
        <td colspan="2">
          <table border="0" width="100%">
            <tr>
              <td>&nbsp</td>
            </tr>
            <tr>
              <td align="center"><strong>Laporan Dana Kas Kecil</strong></td>
            </tr>
            <tr>
              <td align="center">(Dalam Rupiah)</td>
            </tr>
            <tr>
              <td>&nbsp</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <table width="100%" border="0">
            <tr>
              <td>&nbsp</td>  
            </tr>
            <tr>
              <td>
                <table width="100%" border="1px">
                  <tr>
                    <td align="center" width="5%"><b>Tanggal</b></td>
                    <td align="center" width="15%"><b>Keterangan</b></td>
                    <td align="center" width="5%"><b>Penerimaan</b></td>
                    <td align="center" width="5%"><b>Pengeluaran</b></td>
                    <td align="center" width="5%"><b>Perj. Dinas</b></td>
                    <td align="center" width="5%"><b>Biaya RT</b></td>
                    <td align="center" width="5%"><b>ATK</b></td>
                    <td align="center" width="5%"><b>Bea Bank</b></td>
                    <td align="center" width="5%"><b>Biaya Pos (Kurir)</b></td>
                    <td align="center" width="5%"><b>Biaya Sampah</b></td>
                    <td align="center" width="5%"><b>Biaya Air Bersih</b></td>
                    <td align="center" width="5%"><b>Iuran Jaga Malam</b></td>
                    <td align="center" width="5%"><b>Biaya Koran</b></td>
                    <td align="center" width="5%"><b>Biaya Parkir</b></td>
                   
                  </tr>
                  <?php
                    $no=1;
                    $dinas=0;
                    $rt=0;
                    $atk=0;
                    $beabank=0;
                    $biayapos=0;
                    $sampah=0;
                    $airbersih=0;
                    $jagamalam=0;
                    $koran=0;
                    $parkir=0;
                    $jsemua=0;
                    $posisi=4000000;
                    $penerimaan=0;
                    $pengeluaran=0;
                    foreach ($list as $l){
                      $dinas=$dinas+$l->J001;
                      $rt=$rt+$l->J002;
                      $atk=$atk+$l->J003;
                      $beabank=$beabank+$l->J004;
                      $biayapos=$biayapos+$l->J005;
                      $sampah=$sampah+$l->J006;
                      $airbersih=$airbersih+$l->J007;
                      $jagamalam=$jagamalam+$l->J008;
                      $koran=$koran+$l->J009;
                      $parkir=$parkir+$l->J010;
                      $penerimaan=$penerimaan+$l->jmasuk;
                      $pengeluaran=$pengeluaran+$l->jkeluar;
                      if($l->J001=="0"){
                        $J001="";
                      }else{
                        $J001=number_format($l->J001);
                      }
                      if($l->J002=="0"){
                        $J002="";
                      }else{
                        $J002=number_format($l->J002);
                      }
                      if($l->J003=="0"){
                        $J003="";
                      }else{
                        $J003=number_format($l->J003);
                      }
                      if($l->J004=="0"){
                        $J004="";
                      }else{
                        $J004=number_format($l->J004);
                      }
                      if($l->J005=="0"){
                        $J005="";
                      }else{
                        $J005=number_format($l->J005);
                      }
                      if($l->J006=="0"){
                        $J006="";
                      }else{
                        $J006=number_format($l->J006);
                      }
                      if($l->J007=="0"){
                        $J007="";
                      }else{
                        $J007=number_format($l->J007);
                      }
                      if($l->J008=="0"){
                        $J008="";
                      }else{
                        $J008=number_format($l->J008);
                      }
                      if($l->J009=="0"){
                        $J009="";
                      }else{
                        $J009=number_format($l->J009);
                      }
                      if($l->J010=="0"){
                        $J010="";
                      }else{
                        $J010=number_format($l->J010);
                      }
                      $jtotal=$l->J001+$l->J002+$l->J003+$l->J004+$l->J005+$l->J006+$l->J007+$l->J008+$l->J009+$l->J010;
                      $jsemua=$jsemua+$jtotal;
                  ?>
                  <tr>
                    <td><?php echo date_format(date_create($l->tanggal),'d/m/Y')?></td>
                   
                    <td>
                      <?php
                        if($l->status=='1'){
                          echo "Dana Awal(Kas)";
                        }else{
                          echo $l->keterangan;
                        }
                        
                      ?>    
                    </td>
                    <td align="right">
                      <?php
                        if($l->status=='1'){
                          echo $l->jmasuk;
                        }else{
                          echo '';
                        }
                        
                      ?>      
                    </td>
                    <td align="right">
                      <?php
                        if($l->status=='2'){
                          echo $l->jkeluar;
                        }else{
                          echo '';
                        }
                        
                      ?>      
                    </td>
                    <td align="right"><?=$J001?></td>
                    <td align="right"><?=$J002?></td>
                    <td align="right"><?=$J003?></td>
                    <td align="right"><?=$J004?></td>
                    <td align="right"><?=$J005?></td>
                    <td align="right"><?=$J006?></td>
                    <td align="right"><?=$J007?></td>
                    <td align="right"><?=$J008?></td>
                    <td align="right"><?=$J009?></td>
                    <td align="right"><?=$J010?></td>
                    
                  </tr>
                  <?php
                    }
                  ?>
                  <tr>
                    <td colspan="2">Total</td>
                    <td align="right"><?=$penerimaan?></td>
                    <td align="right"><?=$pengeluaran?></td>
                    <td align="right"><?=$dinas?></td>
                    <td align="right"><?=$rt?></td>
                    <td align="right"><?=$atk?></td>
                    <td align="right"><?=$beabank?></td>
                    <td align="right"><?=$biayapos?></td>
                    <td align="right"><?=$sampah?></td>
                    <td align="right"><?=$airbersih?></td>
                    <td align="right"><?=$jagamalam?></td>
                    <td align="right"><?=$koran?></td>
                    <td align="right"><?=$parkir?></td>
                    
                  </tr>
                  <tr>
                    <td colspan="2">Saldo Akhir Kas Kecil</td>
                    <td colspan="2" align="right"><?=$penerimaan-$pengeluaran?></td>
                    
                    <td align="right">&nbsp</td>
                    <td align="right">&nbsp</td>
                    <td align="right">&nbsp</td>
                    <td align="right">&nbsp</td>
                    <td align="right">&nbsp</td>
                    <td align="right">&nbsp</td>
                    <td align="right">&nbsp</td>
                    <td align="right">&nbsp</td>
                    <td align="right">&nbsp</td>
                    <td align="right">&nbsp</td>
                    
                  </tr>
                  <tr>
                    <td colspan="14">
                      <table width="100%">
                        <tr>
                          <td align="center">Dibuat Oleh</td>
                          <td align="center">Disetujui Oleh</td>
                        </tr>
                        <tr>
                          <td>&nbsp</td>
                          <td>&nbsp</td>
                        </tr>
                        <tr>
                          <td>&nbsp</td>
                          <td>&nbsp</td>
                        </tr>
                        <tr>
                          <td>&nbsp</td>
                          <td>&nbsp</td>
                        </tr>
                        <tr>
                          <td align="center">(Admin Cabang)</td>
                          <td align="center">(Kacab MACF Way Kanan)</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <!-- <tr>
                    <td colspan="2">POSISI PER PETTY CASH</td>
                    
                    <td></td>
                    <td align="right" colspan="2"><?php echo number_format($posisi)?></td>
                    <td colspan="3" rowspan="3" valign="bottom">Tgl : <?=date('d M Y')?></td>
                    
                    <td colspan="3" rowspan="3" valign="bottom" align="center">Hendra Wirawan</td>
                    
                    <td colspan="2" rowspan="3" valign="bottom" align="center">Novi yanti</td>
                    
                   
                  </tr>
                  <tr>
                    <td rowspan="3">DIKURANGI</td>
                    <td colspan="2">KAS BON SEMENTARA</td>
                    <td></td>
                    <td colspan="2">&nbsp</td>
                    
                    
                    
                  </tr>
                  <tr>
                    
                    <td colspan="2">JUMLAH PERMINTAAN PERGANTIAN</td>
                    <td></td>
                    <td align="right" colspan="2"><?php echo number_format($jsemua)?></td>
                    
                   
                  </tr>
                  <tr>
                    
                    <td colspan="2">SALDO AKHIR</td>
                    <td></td>
                    <td align="right" colspan="2"><?php echo number_format($posisi-$jsemua)?></td>
                    <td colspan="3" align="center">Finance Pusat</td>
                    
                    <td colspan="3" align="center">Kacab MACF Way Kanan</td>
                    
                    <td colspan="2" align="center">Admin Cabang</td>
                    
                    
                  </tr> -->
                </table> 
              </td>
              
            </tr>
            <tr>
              <td>&nbsp</td>  
            </tr>
          </table>
        </td>
      </tr>
  </table>
  </font>
</body>
</html>

