<div class="container-fluid pt-4 px-4">
	<div class="row g-4">

		<div class="col-sm-12 col-xl-6">
			<div class="bg-secondary rounded h-100 p-4">
				<h6 class="mb-4"><i class="fas fa-list"></i> Informasi Detail Hasil Analisis</h6>

				<table class="table table-dark">
					<tr>
						<th>NO.</th>
						<td><?= $detail->id_analisis ?></td>
					</tr>
					<tr>
						<th>Tanggal Proses</th>
						<td><?= $detail->tgl_proses ?></td>
					</tr>
					<tr>
						<th>Unit Perproduksi</th>
						<td><?= $detail->unit_produksi ?></td>
					</tr>
					<tr>
						<th>Jam Tenaga Kerja</th>
						<td><?= $detail->jam_tkl ?></td>
					</tr>
					<tr>
						<th>Jam Kerja Mesin</th>
						<td><?= $detail->jam_km ?></td>
					</tr>
					<tr>
						<th>Total Harga Bahan Baku</th>
						<td><?= $detail->tot_harga_bb ?></td>
					</tr>
					<tr>
						<th>Upah Tenaga Kerja</th>
						<td><?= $detail->upah_tenaga_kerja ?></td>
					</tr>
					<tr>
						<th>Biaya Listrik</th>
						<td><?= $detail->listrik ?></td>
					</tr>
					<tr>
						<th>Biaya Mesin</th>
						<td><?= $detail->biaya_mesin ?></td>
					</tr>
					<tr>
						<th>Hasil</th>
						<td>Rp. <?= number_format($detail->hasil)  ?></td>
					</tr>
				</table>
				<a href="<?= base_url('Admin/cAnalisis') ?>" class="btn btn-warning"><i class="fas fa-backspace"></i> Kembali</a>

			</div>
		</div>

	</div>
</div>
<!-- Table End -->