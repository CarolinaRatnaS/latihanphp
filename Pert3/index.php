<?php // filename: index.php
include("koneksi.php");

if(isset($_POST['filter'])){
	//jika tombol flter di klik
		$query = "SELECT * FROM kontak
			  INNER JOIN kategori
			  ON kontak.kategori_id = kategori.id
			  WHERE kategori_id=$_POST[kategori]";
	} else {
	
	$query = "SELECT
				a.nama, a.phone, a.email,
				b.keterangan
			  FROM
				kontak a,
				kategori b
			  WHERE
				a.kategori_id = b.id";
			  
	}

	$query1 = "SELECT
				a.nama, a.phone, a.email,
				b.keterangan
			  FROM
				kontak a,
				kategori b
			  WHERE
				a.kategori_id = b.id";
	
	$hasil = mysqli_query($db, $query1);
	//return $hasil;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="filter">
	<b>Filter berdasarkan kategori: </b>
	<?php
	$q2 = "SELECT * FROM kategori";
	$h2 = mysqli_query($db, $q2);
	while($row = mysqli_fetch_assoc($h2))
	?>

	<form action="index.php" method="POST">
		<select>
			<?php while($row = mysqli_fetch_array($hasil)):; ?>
			<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
			<?php endwhile; ?>
		</select>
		<input type="submit" name="filter" value="filter" />
	</form>
</div>
<div id="search">
	<b>Search: </b>
	<form action="" method="post">
		<input type="text" name="search_text" />
		<input type="submit" name="cari" value="Cari" />
	</form>
</div>
<div id="konten">
	<h2>Kontak</h2>
	<a href="form_tambah_kontak.php">Tambah Kontak</a>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Hp.</th>
				<th>Email</th>
				<th>Kategori</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 0;
			while ($row = mysqli_fetch_assoc($hasil)){
				$i++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row ['nama']; ?></td>
				<td><?php echo $row ['phone']; ?></td>
				<td><?php echo $row ['email']; ?></td>
				<td><?php echo $row ['keterangan']; ?></td>
				<td>
					<a href="form_edit_kontak.php">Edit</a> | 
					<a href="delete_kontak.php">Delete</a>
				</td>
			</tr>
			<?php
		}
		?>
		</tbody>
	</table>
</div>
</body>
</html>