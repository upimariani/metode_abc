<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-6">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-clipboard-list"></i> Perbaharui Data Bahan Baku</h6>
				<form action="<?= base_url('Admin/cBahanBaku/update/' . $bb->id_bb) ?>" method="POST">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Nama Bahan Baku</label>
						<input type="text" value="<?= $bb->nama_bb ?>" name="nama_bb" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<?= form_error('nama_bb', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Keterangan</label>
						<input type="text" value="<?= $bb->keterangan ?>" name="keterangan" class="form-control" id="exampleInputPassword1">
						<?= form_error('keterangan', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Unit Perproduksi</label>
						<input type="text" value="<?= $bb->unit_perproduksi ?>" name="unit" class="form-control" id="exampleInputPassword1">
						<?= form_error('unit', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
					<a href="<?= base_url('Admin/cBahanBaku') ?>" class="btn btn-warning"><i class="fas fa-backspace"></i> Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Form End -->