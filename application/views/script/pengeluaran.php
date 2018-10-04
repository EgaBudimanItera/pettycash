<script type="text/javascript">
	$(document).ready(function(){
		//load ajax table
  	loadTable();
	});

	//function untuk load table
    function loadTable() {
          $('#tampilpengeluaran').load('<?=base_url()?>pengeluarankas/formdetailtemp',function(){})
    };

    function bacaGambar1(input) {
       if (input.files && input.files[0]) {
          var reader = new FileReader();
     
          reader.onload = function (e) {
              $('#gambar1').attr('src', e.target.result);
          }
     
          reader.readAsDataURL(input.files[0]);
       }
    }
    $("#file1preview").change(function(){
        bacaGambar1(this);
    });
    function bacaGambar2(input) {
       if (input.files && input.files[0]) {
          var reader = new FileReader();
     
          reader.onload = function (e) {
              $('#gambar2').attr('src', e.target.result);
          }
     
          reader.readAsDataURL(input.files[0]);
       }
    }
    $("#file2preview").change(function(){
        bacaGambar2(this);
    });
    
    //function simpan data
	function simpan(){
        var idjenis=$('#idjenis').val();
        var jkeluar=$('#jkeluar').val();
        var keterangan=$('#keterangan').val();
        $modal = $('#detailpengeluaranModal');
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>pengeluarankas/tambahpengeluarantemp',
            data: 'idjenis='+idjenis+'&jkeluar='+jkeluar+'&keterangan='+keterangan,
            dataType: 'JSON',
            success: function(msg){
                if(msg.status == 'success'){
                    loadTable();
                    $('#detailpengeluaranModal').modal('hide');
                    $('#formTambahPengeluaran')[0].reset();
                   	$('#idjenis').val(null).trigger('change');
                    
                }else if(msg.status == 'fail'){
                   
                   loadTable();
                   alert('gagal tambah data');
                    $('#detailpengeluaranModal').modal('hide');
                    $('#formTambahPengeluaran')[0].reset();
                    $('#idjenis').val(null).trigger('change');
                }
            }
        });
    };

    function hapustemp(id) {
        $.ajax({
            url: "<?=base_url()?>pengeluarankas/proseshapustemp/"+id,
            type: "GET",
            dataType: 'JSON',
            success: function(msg) {
                if(msg.status == 'success'){
                    loadTable();                    
                }else if(msg.status == 'fail'){
                   loadTable();
                   alert('gagal hapus data');
                }
            }
        })
    } ;  
</script>