<?php //filename: kontak.php
	include("db1.php");
	
	$query = "SELECT * FROM t_kontak";
	$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Kontak</h1>
<a href="template1.php?page=formkontak&action=add">Tambah Data</a>
<table>
	<thead>
		<tr>
			<td>No.</td>
			<td>Nama</td>
			<td>Kategori</td>
			<td>No. HP</td>
		</tr>
	</thead>
	<tbody>
		<?php
			while($row = mysqli_fetch_assoc($hasil)) {
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['kategori']; ?></td>
			<td><?php echo $row['hp']; ?></td>
			<td>
				<a href="template1.php?page=formkontak&id=<?php echo $row['id'];?>&action=edit">Edit</a>
				<a href="proses_kontak.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>