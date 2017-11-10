<?php
	//1. membuat koneksi
	$connection = mysqli_connect("localhost", "root", "", "widget_corp");
	
	//2. test jika koneksi gagal
	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
	);
	}
?>
<?php
	// 2. Perform database query
	$query = "SELECT * FROM subjects WHERE visible = 1 ORDER BY position ASC";
	$result = mysqli_query($connection, $query);
	
	// Test jika ada query yang error
	if(!$result) {
		die("Datavase query failed.");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
	
<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>
		<ul>
			<?php
				// 3. Use returned data (if any)
				while($row = mysqli_fetch_row($result)) {
					// oitput dat from each row
					//var_dump($row);
					//echo "<hr />";
				//}
			?>
			<li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>
			<?php
				}
			?>
		</ul>
		
		<?php
			// 4. Release returned data
			mysqli_free_result($result);
		?>
	</body>
</html>

<?php
	//5. menutup koneksi database
	mysqli_close($connection);
?>