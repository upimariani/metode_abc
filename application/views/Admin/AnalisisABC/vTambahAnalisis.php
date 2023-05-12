<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-chart-pie"></i> Analisis Metode ABC</h6>
				<form action="<?= base_url('Admin/cAnalisis/create') ?>" method="POST">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Periode Analisis</label>
						<select class="form-select" name="periode" id="periode_analisis" aria-label="Floating label select example">
							<option>---Pilih Periode---</option>
							<?php
							foreach ($periode as $key => $value) {
							?>
								<option data-bb="<?= $value->harga ?>" value="<?= $value->periode ?>"><?= $value->periode ?></option>
							<?php
							}
							?>
						</select>
						<?= form_error('unit_perproduksi', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Unit Perproduksi</label>
						<input type="text" name="unit_perproduksi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<?= form_error('unit_perproduksi', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Jam Tenaga Kerja Langsung</label>
								<input type="text" name="jtkl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								<?= form_error('jtkl', '<div id="emailHelp" class="form-text">', '</div>'); ?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Jam Kerja Mesin</label>
								<input type="text" name="jkm" class="form-control" id="exampleInputPassword1">
								<?= form_error('jkm', '<div id="emailHelp" class="form-text">', '</div>'); ?>
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Total Harga Bahan Baku</label>
						<input type="text" name="thbb" class="tot_bb form-control" id="exampleInputPassword1">
						<?= form_error('thbb', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Upah Tenaga Kerja</label>
						<input type="text" name="utk" class="form-control" id="exampleInputPassword1">
						<?= form_error('utk', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Biaya Listrik</label>
								<input type="text" name="listrik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
								<?= form_error('listrik', '<div id="emailHelp" class="form-text">', '</div>'); ?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Biaya Mesin</label>
								<input type="text" name="mesin" class="form-control" id="exampleInputPassword1">
								<?= form_error('mesin', '<div id="emailHelp" class="form-text">', '</div>'); ?>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
					<a href="<?= base_url('Admin/cAnalisis') ?>" class="btn btn-warning"><i class="fas fa-backspace"></i> Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Form End -->