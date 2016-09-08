<?php include 'core/db.php';

function show_cat_btn(){
	global $connection;

	$q = "SELECT * FROM category";
	$r = mysqli_query($connection, $q);

	if(mysqli_num_rows($r) > 0){
		while ($row = mysqli_fetch_assoc($r)) {
			$category_name = $row['cat_name'];

			echo "<a href='#' class='list-group-item'>{$category_name}</a>";
		}
	}


}

?>