<?php
include 'db_connect.php';

$name     = $_POST['full_name'];
$email    = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (full_name, email, password) VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "تم التسجيل بنجاح!";
    echo '<br><a href="login.php">سجّل دخولك</a>';
} else {
    echo "حدث خطأ: " . mysqli_error($conn);
}
?>