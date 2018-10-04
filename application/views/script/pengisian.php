<script type="text/javascript">
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
</script>