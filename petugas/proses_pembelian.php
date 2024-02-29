<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];
$TanggalPenjualan = $_POST['TanggalPenjualan'];

// menginput data ke database
mysqli_query($koneksi,"insert into pelanggan (NamaPelanggan, Alamat, NomorTelepon) values('$NamaPelanggan','$Alamat','$NomorTelepon')");
$PelangganID = mysqli_insert_id($koneksi); // Mendapatkan ID yang baru saja di-insert
mysqli_query($koneksi,"insert into penjualan (TanggalPenjualan, PelangganID) values('$TanggalPenjualan','$PelangganID')");

// mengalihkan halaman kembali ke data_barang.php
header("location:pembelian.php?pesan=simpan");

?>
