<!-- Sale & Revenue Start -->
<?php
$user = $this->db->query("SELECT COUNT(id_user) as jml_user FROM `user`")->row();
$bb = $this->db->query("SELECT COUNT(id_bb) as jml_bb FROM `bahan_baku`")->row();
$analisis = $this->db->query("SELECT COUNT(id_analisis) as jml_analisis FROM `analisis_abc`")->row();
$harga = $this->db->query("SELECT COUNT(id_harga) as jml_harga FROM `harga_bb_perperiode`")->row();
?>
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-sm-6 col-xl-3">
			<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
				<i class="fa fa-chart-line fa-3x text-primary"></i>
				<div class="ms-3">
					<p class="mb-2">Bahan Baku</p>
					<h6 class="mb-0"><?= $user->jml_user ?></h6>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xl-3">
			<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
				<i class="fa fa-chart-bar fa-3x text-primary"></i>
				<div class="ms-3">
					<p class="mb-2">User</p>
					<h6 class="mb-0"><?= $bb->jml_bb ?></h6>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xl-3">
			<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
				<i class="fa fa-chart-area fa-3x text-primary"></i>
				<div class="ms-3">
					<p class="mb-2">Analisis</p>
					<h6 class="mb-0"><?= $analisis->jml_analisis ?></h6>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-xl-3">
			<div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
				<i class="fa fa-chart-pie fa-3x text-primary"></i>
				<div class="ms-3">
					<p class="mb-2">Total Revenue</p>
					<h6 class="mb-0"><?= $harga->jml_harga ?></h6>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Sale & Revenue End -->


<!-- Widgets End -->