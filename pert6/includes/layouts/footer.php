<div id="footer">Copyright 20xx, Widget Corp</div>
	</body>
</html>

<?php 
	//5. menutup koneksi database
	if(isset($connection)) {
		mysqli_close($connection);
	}
?>