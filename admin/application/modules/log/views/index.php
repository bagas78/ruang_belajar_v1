<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Materi</h2>
  </div>
</header>

<?php if ($this->session->flashdata('success') == 'y'): ?>
<div class="container mt-4">
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> Perubahan telah disimpan.
    </div>
</div>
<?php elseif($this->session->flashdata('success') == 'n'): ?>
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Failed!</strong> Perubahan gagal disimpan.
  </div>
<?php endif ?>

<div class="container mt-4">
	<div class="card">
		<div class="card-close">
			<div class="dropdown">
				<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
				<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
			</div>
		</div>
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">Tabel Log Aktivitas</h3>
		</div>
		<div class="card-body">
			<div class="table-responsive table-hover">
				<table class="table" id="tbl-siswa">
					<thead>
						<tr>
							<th>NO</th>
							<th>SISWA</th>
							<th>MENU</th>
							<th>TUJUAN</th>
							<th>TANGGAL</th>
							<th>WAKTU</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($materi as $key => $var): ?>
							<tr>
								<td><?php echo $key+1 ?></td>
								<td><?php echo $var['siswa_nama'] ?></td>
								<td><?php echo $var['log_menu'] ?></td>
								<td><?php echo $var['log_judul'] ?></td>
								<td><?php echo date("d-m-Y", strtotime($var['log_tanggal'])) ?></td>
								<td><?php echo $var['log_waktu'] ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function($) {
		var table = $('table').DataTable();
	});
</script>