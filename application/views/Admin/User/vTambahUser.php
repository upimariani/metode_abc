<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-12 col-xl-6">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-user-plus"></i> Tambah Data User</h6>
				<form action="<?= base_url('Admin/cUser/createUser') ?>" method="POST">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Nama User</label>
						<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<?= form_error('nama', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">No Telepon</label>
						<input type="number" name="no_hp" class="form-control" id="exampleInputPassword1">
						<?= form_error('no_hp', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Username</label>
						<input type="text" name="username" class="form-control" id="exampleInputPassword1">
						<?= form_error('username', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="text" name="password" class="form-control" id="exampleInputPassword1">
						<?= form_error('password', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Level User</label>
						<select name="level_user" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
							<option value="">---Pilih Level User---</option>
							<option value="1">Admin</option>
							<option value="2">Pimpinan</option>
						</select>
						<?= form_error('level_user', '<div id="emailHelp" class="form-text">', '</div>'); ?>
					</div>

					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
					<a href="<?= base_url('Admin/cUser') ?>" class="btn btn-warning"><i class="fas fa-backspace"></i> Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Form End -->