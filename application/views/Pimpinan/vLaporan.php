<div class="container-fluid pt-4 px-4">
	<div class="row g-4">

		<div class="col-sm-12 col-xl-12">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-chart-line"></i> Informasi Hasil Analisis</h6>
				<button onclick="window.print()" class="btn btn-info rounded-pill mb-3"><i class="fas fa-print"></i> Print</button>
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
							<th scope="col">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($laporan as $key => $value) {
						?>
							<tr>
								<th scope="row"><?= $no++ ?></th>
								<td><?= $value->tgl_proses ?></td>
								<td><strong>Rp. <?= number_format($value->hasil)  ?></strong><br>
									Unit Produksi : <?= $value->unit_produksi ?><br>
									Jam TKL : <?= $value->jam_tkl ?><br>
									Jam Mesin : <?= $value->jam_km ?><br>
									Total Bahan Baku: Rp. <?= number_format($value->tot_harga_bb) ?><br>
									Upah TK : Rp. <?= number_format($value->upah_tenaga_kerja) ?></td>
								<td>Listrik : <?= number_format($value->listrik) ?><br>
									Biaya Mesin : <?= number_format($value->biaya_mesin) ?></td>
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