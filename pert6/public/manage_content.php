<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>	

<?php include("../includes/layouts/header.php"); ?>		

	<div id="main">
		<div id="navigation">
			<ul class="subjects">
			<?php
				<?php
				// 2. Perform database query
				$query = "SELECT * FROM subjects WHERE visible = 1 ORDER BY position ASC";
				$subject_set = mysqli_query($connection, $query);
				confirm_query($page_set);
				?>
			
				// 3. Use returned data (if any)
				while($row = mysqli_fetch_row($subject_set)) {
					
			?>
			<li>
				<?php echo $subject["menu_name"]; ?>
				<?php
				// 2. Perform database query
				$query = "SELECT * FROM pages 
						  WHERE visible = 1 
						  AND subject_id = {$subject["id"]} 
						  ORDER BY position ASC";
				$page_set = mysqli_query($connection, $query);
				confirm_query($page_set);
				?>
				
				<ul class="pages">
					<?php
						while($page_set = mysqli_fetch_assoc($page_set)) {
					?>
						<li><?php echo $page["menu_name"]; ?></li>
					<?php
						}
					?>
					<?php mysqli_free_result($page_set);?>
				</ul>
			</li>
			<?php
				}
			?>
			<?php mysqli_free_result($subject_set);?>
			
			
			
		</ul> 
		</div>
		<div id="page">
			<h2>Manage Content</h2>
			
		</div>
	</div>

<?php include("../includes/layouts/footer.php"); ?>