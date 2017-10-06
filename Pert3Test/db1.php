<?php //file: db1.php

// 1. Koneksi
$koneksi = mysqli_connect("localhost", "root", "", "belajar_kalbis");

$q = "SELECT t_kontak.id,
			 t_kontak.nama,
			 t_kontak.hp
	  FROM t_kontak
	  INNER JOIN t_kategori
	  ON t_kontak.kategori = t_kategori.kategori";
$hasil = mysqli_query($koneksi, $q);
?>