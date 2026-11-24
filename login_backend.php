<?php
include 'db_connect.php';

$email    = $_POST['email'];
$password = $_POST['password'];

$sql    = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    echo "أهلاً " . $user['full_name'] . "!";
    echo '<br><a href="products.php">اذهب للمعروضات</a>';
} else {
    echo "البريد الإلكتروني أو كلمة المرور غلط";
    echo '<br><a href="login.php">حاول تاني</a>';
}
?>