<?php
session_start();
include "koneksi.php";

$username = $_POST["nama"];
$password = $_POST["pass"];

$query = mysqli_query($conn, "SELECT * From login WHERE username='$username' AND password = '$password'");
if($data = mysqli_num_rows($query) > 0){
    $_SESSION["username"]=$username;
    header ("location: beranda.php");
} else {
    header ("location: index.php");
}
