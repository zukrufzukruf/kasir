<!DOCTYPE html>
<html>

<head>
	<title>UKK KASIR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
		body {
			font-family: Arial bold;
		}

		p {
			font-family: Georgia;
		}

		p {
			font-size: 20px;
		}
	</style>
	<link rel="stylesheet" href="cc.css" />
</head>

<body>
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card">
					<center><img src="assets/kasir.png" width="200"></center>
					<div class="card-body bg-light">
						<div class="text-center">
							<h5>Login Aplikasi</h5>
						</div>
						<?php
						if (isset($_GET['pesan'])) {
							if ($_GET['pesan'] == "gagal") {
								echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
							}
						}
						?>
						<form method="post" action="cek_login.php">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<div class="form-group mt-3">
									<button class="btn btn-primary form-control" type="submit">Login</button>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>