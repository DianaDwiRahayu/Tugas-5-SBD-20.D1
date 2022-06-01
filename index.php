<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Menampilkan data dari database</title>
	<style>
        table,tr,td {
            border: 1px solid black;
			padding: 10px 15px;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
<div id="container">
        <header>
            <h1 align="center">Informasi Klinik</h1>
        </header>
		<nav>
			<a href="index.php"class="active">Home</a>
            <a href="pasien.php">Pasien</a>
            <a href="obat.php">Obat</a>
            <a href="dokter.php">Dokter</a>
            <a href="berobat.php">Berobat</a>
			<a href="resep.php">Resep</a>
			<a href="users.php">User</a>
        </nav>
		<section id="hero">
		<h1 align="center">Selamat Datang</h1>
		</section>
		<div background="green">
		<hr class="divider" />
			<article class="entry">
			<img src="utama.jpg" alt="klinik" width="550px" hight="550" class="left-img">
				<h2>Pelayanan IGD</h2>
				<img src="igd.jpg" alt="klinik" width="189px" class="left-img">
				<p>Pelayanan IGD dilengkapi dengan beberapa fasilitas yang cukup memadai</p>
			</article
		<hr class="divider" />
			<article class="entry">
				<h2>GIZI</h2>
				<img src="gizi.jpg" alt="klinik" width="189px" class="left-img">
				<p>Merupakan unit yang mengelola pelayanan gizi bagi pasien rawat inap</p>
			</article>
		</div>
	<footer>
		<p align="center">&copy; 2022 - Diana Dwi Rahayu</p>
	</footer>
</div>
</body>
</html>
