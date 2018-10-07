<?
	$id=$_GET['id'];
	$sql_counter_increment = "UPDATE ms_sql_gallery SET counter = counter+1 WHERE id=$id";
	mysqli_query ($connect, $sql_counter_increment);
	$sql_counter_show = "SELECT counter FROM ms_sql_gallery WHERE id=$id";
	$row = mysqli_query ($connect, $sql_counter_show);
	$counter = implode("", mysqli_fetch_assoc($row));
	echo "<h2> Колличество показов = $counter </h2>";
	echo "<img src=\"full/$id.jpg\">";
	
?>