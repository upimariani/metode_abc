<div class="container-fluid pt-4 px-4">
	<div class="row g-4">

		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-users"></i> Informasi User</h6>
				<a href="<?= base_url('Admin/cUser/createUser') ?>" class="btn btn-warning rounded-pill mb-3"><i class="fas fa-user-plus"></i> Tambah Data User</a>

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
							<th scope="col">Nama User</th>
							<th scope="col">No Telepon</th>
							<th scope="col">Username</th>
							<th scope="col">Password</th>
							<th scope="col">Level User</th>
							<th scope="col" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($user as $key => $value) {

						?>
							<tr>
								<th scope="row"><?= $no++ ?></th>
								<td><?= $value->nama_user ?></td>
								<td><?= $value->no_hp ?></td>
								<td><?= $value->username ?></td>
								<td><?= $value->password ?></td>
								<td><?php if ($value->level_user == '1') {
										echo '<span class="badge bg-success">Admin</span>';
									} else {
										echo '<span class="badge bg-warning">Pimpinan</span>';
									}  ?></td>
								<td class="text-center">
									<a href="<?= base_url('Admin/cUser/delete/' . $value->id_user) ?>" class="btn btn-square btn-danger m-2"><i class="fa fa-trash"></i></a>
									<a href="<?= base_url('Admin/cUser/update/' . $value->id_user) ?>" class="btn btn-square btn-warning m-2"><i class="fa fa-edit"></i></a>
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