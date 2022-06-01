<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010055";
$db = "klinik_312010055";
$conn = mysqli_connect("$host","$user","$pass","$db");

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();
}
?>
