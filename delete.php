<?php
// delete.php
// بتحذف منتج من الـ DB بناءً على الـ id الجاي من الـ URL

// غيرنا server.php لـ db_connect.php عشان ده اسمه في مشروعنا
include 'db_connect.php';

// نجيب الـ id من الـ URL — مثال: delete.php?id=3
$id = $_GET['id'];

// query الحذف — غيرنا product لـ products عشان ده اسم الجدول عندنا
$query = "DELETE FROM products WHERE id='$id'";

// غيرنا $db لـ $conn عشان ده اسم الـ connection عندنا
$del = mysqli_query($conn, $query);

if ($del) {
    mysqli_close($conn);
    // غيرنا Fleet.php لـ products.php عشان دي صفحة المنتجات عندنا
    header("location:products.php");
} else {
    echo "error deleting record";
}
?>
