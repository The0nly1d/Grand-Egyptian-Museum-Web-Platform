<?php
// =============================================
// config/db_connect.php
// ملف الاتصال بقاعدة البيانات
// بيتعمل include في كل ملف PHP محتاج DB
// =============================================

// mysqli_connect بتعمل connection مع MySQL
// الترتيب: (السيرفر، اسم المستخدم، الباسورد، اسم الـ database)
$conn = mysqli_connect("localhost", "root", "", "gem_db");

// لو الاتصال فشل، وقف كل حاجة واعرض الخطأ
if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}

// نقول للـ DB إننا بنستخدم Arabic (utf8mb4)
mysqli_set_charset($conn, "utf8mb4");
?>
