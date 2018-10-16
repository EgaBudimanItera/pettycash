
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
  <table width="50%" border="1px">
    <tr>
      <td colspan="3">PT. MEGA AUTO FINANCE CABANG WAY KANAN</td>

    </tr> 
    <tr>
      <td colspan="3">Rekapan Petty Cash</td>
    </tr>  
    <tr>
      <td colspan="3">&nbsp</td>
    </tr>
    <tr>
      <td align="center" width="5%">No</td>
      <td align="center" width="50%">MPP Tanggal</td>
      <td align="center" width="45%">Jumlah</td>
    </tr>
    <?php
      $no=1;
      $total=0;
      foreach($list as $l){
        $total=$total+$l->jmasuk-$l->sisa;
    ?>
    <tr>
      <td><?=$no++?></td>
      <td><?=date_format(date_create($l->tanggal),'d M Y')?></td>
      <td align="right"><?=number_format($l->jmasuk-$l->sisa)?></td>
    </tr>
    <?php    
      }

    ?>
    <tr>
      <td colspan="2">Total</td>
      <td align="right"><?=number_format($total)?></td>
    </tr>
  </table>
</body>
</html>

