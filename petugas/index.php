<?php
include "header.php";
include "navbar.php";
?>
<body> 
	<style>
		body{ 
			margin: 0;
			padding: 0;
			background : url('../4567.jpg');
			background-size: cover;
			background-position: center;
			font-family: 'Times New Roman', Times, serif;
		}
		</style>
</body>
<div class=" mt-3">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6">
				<div class="card bg-warning text-black">
					<div class="card-body">
						Data Barang
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h3><?php echo $jumlah_produk; ?></h3>
						<a href="data_barang.php" class="btn btn-outline-dark btn-sm">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card bg-success text-black">
					<div class="card-body">
						Data Pembelian
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h3><?php echo $jumlah_penjualan; ?></h3>
						<a href="pembelian.php" class="btn btn-outline-dark btn-sm">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mt-2">
	<div class="card-body">
		<center>
		<p>Selamat datang dihalaman Petugas, Silahkan anda bisa mengakses beberapa fitur</p>
	</center>
	</div>
</div>
<?php
include "footer.php";
?>