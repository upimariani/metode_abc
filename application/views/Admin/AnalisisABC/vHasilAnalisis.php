<div class="container-fluid pt-4 px-4">
	<div class="row g-4">

		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-chart-line"></i> Informasi Hasil Analisis</h6>
				<a href="<?= base_url('Admin/cAnalisis/create') ?>" class="btn btn-warning rounded-pill mb-3"><i class="fas fa-user-plus"></i> Tambah Analisis</a>
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
							<th scope="col">Tanggal Proses</th>
							<th scope="col">Hasil</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($analisis as $key => $value) {
						?>
							<tr>
								<th scope="row"><?= $no++ ?></th>
								<td><?= $value->tgl_proses ?></td>
								<td>Rp. <?= number_format($value->hasil)  ?></td>
								<td> <a href="<?= base_url('Admin/cAnalisis/detail_hasil/' . $value->id_analisis) ?>" class="btn btn-square btn-info m-2"><i class="fa fa-info"></i></a>
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