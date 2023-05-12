<div class="container-fluid pt-4 px-4">
	<div class="row g-4">

		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-tags"></i> Informasi List Harga Perioden <?= $periode ?></h6>
				<form action="<?= base_url('Admin/cHargaBB/createHarga') ?>" method="POST">
					<input type="hidden" name="date" value="<?= $periode ?>">
					<button type="submit" class="btn btn-warning rounded-pill mb-3"><i class="fas fa-cart-plus"></i> Tambah Harga Bahan Baku</button>

				</form>
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<i class="fa fa-exclamation-circle me-2"></i><?= $this->session->userdata('success') ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php
				}
				?>
				<table class="table table-dark">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nama Bahan Baku</th>
							<th scope="col">Harga</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($listharga as $key => $value) {
						?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $value->nama_bb ?></td>
								<td>Rp. <?= number_format($value->harga)  ?></td>
								<td> <a href="<?= base_url('Admin/cHargaBB/delete_listharga/' . $value->id_harga) ?>" class="btn btn-square btn-danger m-2"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>
<!-- Table End -->