<?
include_once ("config.php");
$sql_indexMax = "SELECT id FROM ms_sql_gallery ORDER BY id DESC LIMIT 1";
$sql_insert = "INSERT INTO ms_sql_gallery VALUES(NULL, 0)";
mysqli_query ($connect, $sql_insert);
$row = mysqli_query ($connect, $sql_indexMax);
$index = implode("", mysqli_fetch_assoc($row));
$path="../full/".$index.".jpg";
move_uploaded_file($_FILES[photo][tmp_name], $path);
include_once("get_min.php");
get_min($path, "../minimal/".$index, 200, 200, 1000);
echo "<p> Картинка успешно загружена. <a href=\"../index.php\">Продолжить</a></p>"
?>