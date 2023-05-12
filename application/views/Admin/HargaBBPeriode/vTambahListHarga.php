<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-6">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-tags"></i> Tambah Data List Harga Bahan Baku Periode <strong><?= $periode ?></strong></h6>
				<form action="<?= base_url('Admin/cHargaBB/createHarga') ?>" method="POST">
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Bahan Baku</label>
						<select name="bb" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
							<option>---Pilih Bahan Baku---</option>

							<?php
							foreach ($bb as $key => $value) {
							?>
								<option value="<?= $value->id_bb ?>"><?= $value->nama_bb ?></option>
							<?php
							}
							?>
						</select>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Harga Per Produksi</label>
						<input type="number" name="harga" class="form-control" id="exampleInputPassword1">

					</div>
					<input type="hidden" name="periode" value="<?= $periode ?>" class="form-control">
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
					<a href="<?= base_url('Admin/chargaBB') ?>" class="btn btn-warning"><i class="fas fa-backspace"></i> Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Form End -->