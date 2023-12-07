<style type="text/css">
td {
  vertical-align: top;
}
</style>
<div class="d-block" id="head-soal">
	<div class="d-block" align="center">
		<h3><?php echo $soal->soal_uraian_nama ?></h3>
		
	</div>
	<form method="post" id="form" action="<?php echo base_url("soal/uraian_post") ?>">
		<div class="pt-4">
			<div class="input-group mb-3">
			  <input type="hidden" name="soal_id" id="soal_id" value="<?php echo $soal->soal_uraian_id ?>">
			  <input type="number" name="siswa_id" id="siswa_id" required="" class="form-control" placeholder="Masukkan nomor induk" aria-describedby="basic-addon2">
			  <div class="input-group-append">
			    <!-- <span class="input-group-text" id="basic-addon2">@example.com</span> -->
			    <button type="button" class="input-group-text btn-info" id="btn-setel">Setel Nomor Induk</button>
			  </div>
			</div>
			<hr>
		</div>
		<table>
		<?php foreach (unserialize($soal->soal_uraian_data) as $key => $var): ?>
			<tr>
				<td><p><?php echo $key ?>.</p></td>
				<td><p><?php echo str_replace(PHP_EOL, "<br>", $var['pertanyaan'] )?></p></td>
			</tr>
			<tr>
				<td></td>
				<td style="width: 100%" class="pb-3">
					<textarea name="jawaban[<?php echo $key ?>]" class="form-control"></textarea>
				</td>
			</tr>
		<?php endforeach ?>
		</table>
		<hr>
		<div class="form-group" align="center">
			<button type="submit" class="btn btn-primary">Submit</button>
			<button type="reset" class="btn btn-danger">Reset</button>
		</div>
	</form>
</div>
<script type="text/javascript">
	$("#siswa_id").keypress(function(e) {
	    if(e.which == 13) {
	        num_siswa();
	    }
	});
	$("#btn-setel").click(function(event) {
		num_siswa();
	});

	function num_siswa() {
		$.get('<?php echo base_url('soal/fetch_siswa') ?>/' + $("#siswa_id").val(), function(data) {
			/*optional stuff to do after success */
			if (data == "1") {
				$("#siswa_id").attr("readonly", "readonly");
				$.post('<?php echo base_url("soal/validasi_uraian") ?>', {"siswa_id": $("#siswa_id").val(), "soal_id": '<?php echo $soal->soal_uraian_id ?>' }, function(data, textStatus, xhr) {
					if (data == "1") {
						var conf = confirm("Anda telah mengerjakan soal ini periksa nilai ?");
						if (conf) {
							window.location.href = "<?php echo base_url("soal/list_nilai") ?>";
						}
					}
				});
			} else {
				alert("id siswa tidak ditemukan !");
			}
		});
	}

	$("#form").submit(function(event) {
		/* Act on the event */
		if ($("#siswa_id").attr("readonly") != "readonly") {
			alert("lengkapi form terlebih dahulu..");
			$('html, body').animate({
    		    scrollTop: $("#head-soal").offset().top
    		}, 350);
			return false;
		}
	});
</script>