<div id="info-alert1">
    <?=@$this->session->flashdata('msg')?>
</div>
<table id="example1" class="table table-bordered table-striped">
	<thead>
	  <tr>
	    <th align="center">No</th>
	    <th align="center">Jenis Pengeluaran</th>
	    <th align="center">Keterangan</th>
	    <th align="center">Jumlah Pengeluaran (Rp)</th>
	    <th align="center">Aksi</th>
	  </tr>
	</thead>

	<tbody>
	 	<?php
	 	  $no=1;
	 	  $total=0;
	 	  foreach($listpengeluaran as $l){
	 	?>
	 	<tr>
	 		<td><?=$no++?></td>
	 		<td><?=$l->namajenis?></td>
	 		<td><?=$l->keterangan?></td>
	 		<td align="right"><?=$l->jumlah?></td>
	 		<td>
	 			<a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="#" onclick="if(confirm('Apakah anda yakin?')) hapustemp('<?=$l->idtemp?>');"><i class="fa fa-trash"></i></a>
	 		</td>
	 	</tr>
	 	<?php
	 	  $total=$total+$l->jumlah;
	 	  }
	 	?> 
	 	<tr>
	 		<td colspan="3">Total Pengeluaran</td>
	 		<td  align="right"><?php echo number_format($total)?></td>
	 		<td></td>
	 	</tr>
	 	<tr>
	 		<td colspan="3">Sisa Kas Saat ini</td>
	 		<td  align="right"><?php echo number_format($sisakas->sisa)?></td>
	 		<td></td>
	 	</tr>
	 	<tr>
	 		<td colspan="3">Saldo Kas Akhir</td>
	 		<td  align="right"><?php echo number_format($sisakas->sisa-$total)?></td>
	 		<td></td>
	 	</tr>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function(){
		$("#info-alert1").fadeTo(2000,50).slideUp(50,function(){
          $("#info-alert1").slideUp(50);
      });
	});
</script>