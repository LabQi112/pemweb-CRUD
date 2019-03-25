<?php

include_once("koneksi.php");
$id_video = $_GET['id_video'];
$result = mysqli_query($mysqli, "DELETE FROM video WHERE id_video=$id_video");
header("Location:beranda.php");

?>