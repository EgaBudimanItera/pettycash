<script type="text/javascript" src="<?=base_url()?>assets_chart/canvasjs/canvasjs.min.js"></script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Pengeluaran Kas Kecil Masing-Masing Pos Pengeluaran"
	},
	axisY: {
		title: "Jumlah Pengeluaran (Rp)",
		// suffix: "%",
		// includeZero: false
	},
	axisX: {
		title: "Pos Pengeluaran"
	},
	data: [{
		type: "column",
		// yValueFormatString: "#,##0.0#\"%\"",
		dataPoints: [
			<?php foreach($row->result() as $data){?>
			{ label: "<?=$data->namajenis?>", y: <?=$data->total?> },
			<?php }?>
				
			
			
		]
	}]
});
chart.render();

}
</script>