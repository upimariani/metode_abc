<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-6">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-clipboard-list"></i> Tambah Data Bahan Baku</h6>
				<form>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Nama Bahan Baku</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.
						</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Keterangan</label>
						<input type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Unit Perproduksi</label>
						<input type="password" class="form-control" id="exampleInputPassword1">
					</div>
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
					<a href="<?= base_url('Admin/cBahanBaku') ?>" class="btn btn-warning"><i class="fas fa-backspace"></i> Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Form End -->
