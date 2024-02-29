
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<br>
<br>
<br>
			<center>
				<h1>LAPORAN PENJUALAN</h1>
			</center>
			<table class="table table-striped table-bordered data">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Pelanggan</th>
						<th>Nama Pelanggan</th>
						<th>No. Telepon</th>
						<th>Alamat</th>
						<th>Total Pembayaran</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include '../koneksi.php';
					$no = 1;
					$data = mysqli_query($koneksi, "SELECT * FROM pelanggan INNER JOIN penjualan ON pelanggan.PelangganID=penjualan.PelangganID");
					while ($d = mysqli_fetch_array($data)) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['PelangganID']; ?></td>
							<td><?php echo $d['NamaPelanggan']; ?></td>
							<td><?php echo $d['NomorTelepon']; ?></td>
							<td><?php echo $d['Alamat']; ?></td>
							<td><?php echo "Rp. " . number_format($d['TotalHarga'], 0, ',', '.'); ?></td>

						</tr>
						<!-- Modal Edit Data-->
						<div class="modal fade" id="edit-data<?php echo $d['PelangganID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">


									</div>
									<form action="proses_update_pembelian.php" method="post">
										<div class="modal-body">
											<div class="form-group">
												<input type="text" name="PelangganID" value="<?php echo $d['PelangganID']; ?>" class="form-control" hidden>
											</div>
											<div class="form-group">
												<label>Nama Pelanggan</label>
												<input type="text" name="NamaPelanggan" value="<?php echo $d['NamaPelanggan']; ?>" class="form-control">
											</div>
											<div class="form-group">
												<label>No. Telepon</label>
												<input type="text" name="NomorTelepon" value="<?php echo $d['NomorTelepon']; ?>" class="form-control">
											</div>
											<div class="form-group">
												<label>Alamat</label>
												<input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>" class="form-control">
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<!-- Modal Hapus Data-->
						<div class="modal fade" id="hapus-data<?php echo $d['PelangganID']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<form method="post" action="proses_hapus_pembelian.php">
										<div class="modal-body">
											<input type="hidden" name="PelangganID" value="<?php echo $d['PelangganID']; ?>">
											Apakah anda yakin akan menghapus data <b><?php echo $d['NamaPelanggan']; ?></b>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Hapus</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Modal Tambah Data-->
	<div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="proses_pembelian.php" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label>ID Pelanggan</label>
							<input type="text" name="PelangganID" value="<?php echo date("dmHis") ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Pelanggan</label>
							<input type="text" name="NamaPelanggan" class="form-control">
						</div>
						<div class="form-group">
							<label>No. Telepon</label>
							<input type="text" name="NomorTelepon" class="form-control">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="Alamat" class="form-control">
							<input type="hidden" name="TanggalPenjualan" value="<?php echo date("Y-m-d") ?>" class="form-control">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
window.print();
</script>