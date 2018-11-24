
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
<title>Rekap Pengisian Kas Kecil</title>
</head>
<body onload="window.print()" background="<?=base_url()?>/assets/bgh.jpg" >
  <table width="100%" border="1px">
    <tr>
      <td><font size="1px">PT. MEGA AUTO FINANCE CABANG WAY KANAN</font></td>
    </tr> 
    <tr>
      <td align="center"><strong>MEMO PERMINTAAN PEMBAYARAN</strong></td>
    </tr>  
   
    <tr>
      <td>
        <table width="100%" border="0px">
          <tr>
            <td width="55%">Kepada Yth</td>
            <td width="8%">Nomor</td>
            <td width="1%">:</td>
            <?php
              $rom='';
              if(date('m')=='1'){
                $rom='I';
              }elseif(date('m')=='2'){
                $rom='II';
              }elseif(date('m')=='3'){
                $rom='III';
              }elseif(date('m')=='4'){
                $rom='IV';
              }elseif(date('m')=='5'){
                $rom='V';
              }elseif(date('m')=='6'){
                $rom='VI';
              }elseif(date('m')=='7'){
                $rom='VII';
              }elseif(date('m')=='8'){
                $rom='VIII';
              }elseif(date('m')=='9'){
                $rom='IX';
              }elseif(date('m')=='10'){
                $rom='X';
              }elseif(date('m')=='11'){
                $rom='XI';
              }elseif(date('m')=='12'){
                $rom='XII';
              }
            ?>
            <td width="36%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp/MACF/WKN/<?=$rom?>/<?=date('Y')?></td>
          </tr>
          <tr>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFinance & Accounting Dept.</td>
            <td>Tanggal</td>
            <td>:</td>
            <td><?=date('d F Y')?></td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>No CGS</td>
            <td>:</td>
            <td>&nbsp</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table width="100%" border="0">
          <tr>
            <td>Mohon Dilakukan Pembayaran Untuk</td>
          </tr>
          <tr>
            <td>Pembayaran Petty Cash cabang Way Kanan – MACF periode <?=date_format(date_create($list->tanggal),'F Y')?></td>
          </tr>
          <tr>
            <td>&nbsp</td>
          </tr>
          
          <tr>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>Sebesar : Rp <?=number_format($list->jmasuk-$list->sisa)?></td>
          </tr>
          <tr>
            <td>&nbsp&nbsp &nbsp&nbsp&nbsp(<?=$this->Petty_cash->terbilang($list->jmasuk-$list->sisa)?>)</td>
          </tr>
          <tr>
            <td>&nbsp</td>
          </tr>
          
          <tr>
            <td>&nbsp</td>
          </tr>
          <tr><td>Ditransfer Ke Rekening</td></tr>
          <tr>
            <td>
              <table width="100%" border="0">
                <tr>
                  <td width="17%">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAtas Nama</td>
                  <td width="2%">:</td>
                  <td>PT MEGA CENTRAL FINANCE</td>
                </tr>
                <tr>
                  <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo. Rekening</td>
                  <td>:</td>
                  <td>0018-01-000640-30.6</td>
                </tr>
                <tr>
                  <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNama Bank</td>
                  <td>:</td>
                  <td>BRI Cab. Tanah Abang</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>Lampiran :</td>
          </tr>
          <tr>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>&nbsp</td>
          </tr>
          <tr>
            <td>
              <table width="100%" border="0">
                <tr>
                  <td align="center" width="50%">Dibuat Oleh</td>
                  <td align="center" width="50%">Mengetahui</td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp</td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp</td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp</td>
                </tr>
                <tr>
                  <td align="center"><b>Noviyanti</b></td>
                  <td align="center"><b>Hendrawan</b></td>
                </tr>
                <tr>
                  <td align="center">Adm Cabang</td>
                  <td align="center">Kacab Way Kanan – MCF</td>
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

