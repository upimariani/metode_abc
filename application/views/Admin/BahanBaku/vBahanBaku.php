<div class="container-fluid pt-4 px-4">
	<div class="row g-4">

		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-clipboard-list"></i> Informasi Bahan Baku</h6>
				<a href="<?= base_url('Admin/cBahanBaku/createBB') ?>" class="btn btn-warning rounded-pill mb-3"><i class="fas fa-user-plus"></i> Tambah Data Bahan Baku</a>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<i class="fa fa-exclamation-circle me-2"></i>An icon & dismissing success alert—check it out!
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<table class="table table-dark">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nama Bahan Baku</th>
							<th scope="col">Keterangan</th>
							<th scope="col">Unit Perproduksi</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>John</td>
							<td>Doe</td>
							<td>jhon@email.com</td>
							<td>jhon@email.com</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>
<!-- Table End -->
