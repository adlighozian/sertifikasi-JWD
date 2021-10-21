<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
?>
<!doctype html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- Style CSS -->
	<link rel="stylesheet" href="halaman.css">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- icon web -->
	<link href='1.png' rel='shortcut icon'>

	<title>Sistem Informasi Perpustakaan</title>
</head>

<body>

	<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="height: 50px;">
		<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><i class='bx bx-book-open bx-tada' style='color:#ffffff'  ></i> Data Perpus</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
	</header>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
				<div class="position-sticky pt-3">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" href="index.php?p=beranda">
								<span data-feather="home"></span> Beranda
							</a>
						</li>
					</ul>

					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>Data</span>
					</h6>

					<ul class="nav flex-column mb-2">
						<li class="nav-item">
							<a class="nav-link" href="index.php?p=anggota">
								<span data-feather="file"></span><i class='bx bx-user' style='color:#060606'  ></i> Data Anggota
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?p=buku">
								<span data-feather="shopping-cart"></span><i class='bx bx-book' style='color:#060606' ></i> Data Buku
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?p=transaksi-peminjaman">
								<span data-feather="users"></span><i class='bx bxs-receipt'></i> Transaksi Peminjaman
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			<?php
            $pages_dir = 'pages';
            if (!empty($_GET['p'])) {
                $pages = scandir($pages_dir, 0);
                unset($pages[0], $pages[1]);
                $p = $_GET['p'];
                if (in_array($p . '.php', $pages)) {
                    include($pages_dir . '/' . $p . '.php');
                } else {
                    echo 'Halaman Tidak Ditemukan';
                }
            } else {
                include($pages_dir . '/beranda.php');
            }
            ?>
			</main>
		</div>
	</div>


	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
	<script src="dashboard.js"></script>
</body>


</html>