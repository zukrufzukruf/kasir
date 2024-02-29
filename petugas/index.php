<?php
include "header.php";
include "navbar.php";
?>
<link rel="stylesheet" href="css.css" />
<div class="container">
<div class="card mt-2">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6">
				<div class="card bg-info">
					<div class="card-body">
						Data Barang
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h3><?php echo $jumlah_produk; ?></h3>
						<a href="data_barang.php" class="btn btn-outline-warning btn-sm">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card bg-info-subtle">
					<div class="card-body">
						Data Pembelian
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h3><?php echo $jumlah_penjualan; ?></h3>
						<a href="pembelian.php" class="btn btn-outline-warning btn-sm">Detail</a>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mt-2">
	<div class="p-3 text-primary-emphasis border border-primary-subtle rounded-3">
	<center><p>Selamat datang dihalaman petugas, silahkan anda bisa mengakses beberapa fitur</p></center>
	</div>
</div>
</div>
<?php
include "footer.php";
?>