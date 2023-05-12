<div class="container-fluid pt-4 px-4">
	<div class="row g-4">

		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-clipboard-list"></i> Informasi Bahan Baku</h6>
				<a href="<?= base_url('Admin/cBahanBaku/createBB') ?>" class="btn btn-warning rounded-pill mb-3"><i class="fas fa-user-plus"></i> Tambah Data Bahan Baku</a>
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

							<th scope="col">Unit Perproduksi</th>
							<th scope="col">Keterangan</th>
							<th scope="col" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($bb as $key => $value) {

						?>
							<tr>
								<th scope="row"><?= $no++ ?></th>
								<td><?= $value->nama_bb ?></td>

								<td><?= $value->unit_perproduksi ?></td>
								<td><?= $value->keterangan ?></td>
								<td class="text-center">
									<a href="<?= base_url('Admin/cBahanBaku/delete/' . $value->id_bb) ?>" class="btn btn-square btn-danger m-2"><i class="fa fa-trash"></i></a>
									<a href="<?= base_url('Admin/cBahanBaku/update/' . $value->id_bb) ?>" class="btn btn-square btn-warning m-2"><i class="fa fa-edit"></i></a>
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