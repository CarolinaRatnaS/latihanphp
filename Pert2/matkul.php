<?php //filename: matkul.php
	include("db.php");
	
	$query = "SELECT * FROM matkul";
	$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Mata Kuliah</h1>
<a href="template.php?page=formmatkul&action=add">Tambah Data</a>
<table>
	<thead>
		<tr>
			<td>No.</td>
			<td>Kode Mata Kuliah</td>
			<td>Nama Mata Kuliah</td>
		</tr>
	</thead>
	<tbody>
		<?php
			while($row = mysqli_fetch_assoc($hasil)) {
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['kodeMatkul']; ?></td>
			<td><?php echo $row['namaMatkul']; ?></td>
			<td>
				<a href="template.php?page=formmatkul&id=<?php echo $row['id'];?>&action=edit">Edit</a>
				<a href="proses_matkul.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>