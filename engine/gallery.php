<?
$sql = "SELECT * FROM ms_sql_gallery ORDER BY counter DESC";
$res = mysqli_query ($connect, $sql);
$gallery_data = array();
while ($row = mysqli_fetch_assoc($res)) {
	$gallery_data[] = $row;
};

foreach ($gallery_data as $key => $value) {


	echo "<a href=\"fullimage.php?id=$value[id]\" target=\"_blanc\"><img src=\"minimal/$value[id].jpg\"></a>";
}

?>



