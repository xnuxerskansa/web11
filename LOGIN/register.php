<?php
require 'koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_users ( username, email, password) 
            VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
