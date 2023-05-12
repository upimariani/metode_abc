<div class="container-fluid pt-4 px-4">
	<div class="row g-4">

		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-tags"></i> Informasi Periode Harga Bahan Baku</h6>
				<form action="<?= base_url('Admin/cHargaBB/createHarga') ?>" method="POST">
					<div class="row">
						<div class="col-lg-4"> <input type="date" name="date" class="form-control" required></div>
						<div class="col-lg-8"><button type="submit" class="btn btn-warning rounded-pill mb-3"><i class="fas fa-plus"></i> Tambah Periode</button></div>
					</div>
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
							<th scope="col">Periode</th>
							<th scope="col">Views</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($periode as $key => $value) {
						?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $value->periode ?></td>
								<td>
									<a href="<?= base_url('Admin/cHargaBB/listharga/' . $value->periode) ?>" class="btn btn-square btn-success m-2"><i class="fa fa-eye"></i></a>
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