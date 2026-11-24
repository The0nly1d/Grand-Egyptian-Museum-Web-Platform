<?php
// products.php
// بيجيب المنتجات من الـ DB ويعرضهم مباشرة في الصفحة

include 'db_connect.php';

// نجيب كل المنتجات من الـ DB
$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>المعروضات — المتحف المصري الكبير</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { margin: 0; font-family: 'Cairo', sans-serif; background-color: #f4f9ff; color: #2b3b50; }
        nav { position: fixed; top: 0; width: 100%; background: #1f2f46; padding: 12px; text-align: center; z-index: 1000; }
        nav a { color: white; margin: 10px; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #ffd700; }
        section { padding: 110px 20px 80px; text-align: center; }
        h2 { color: #1f2f46; margin-bottom: 20px; }
        .gallery { display: flex; flex-wrap: wrap; justify-content: center; }
        .card { background: white; border-radius: 10px; margin: 10px; width: 220px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); overflow: hidden; }
        .card img { width: 100%; height: 160px; object-fit: cover; background: #e8edf2; }
        .card-body { padding: 12px; text-align: right; }
        .card-body h3 { font-size: 15px; margin-bottom: 6px; }
        .card-body p { font-size: 13px; color: #666; margin-bottom: 8px; }
        .price { font-weight: bold; color: #1f2f46; }
        /* زرار الحذف */
        .btn-delete { display: block; margin-top: 8px; background: #e74c3c; color: white; padding: 6px; border-radius: 5px; text-decoration: none; font-size: 13px; text-align: center; }
        .btn-delete:hover { background: #c0392b; }
        /* زرار التعديل */
        .btn-edit { display: block; margin-top: 5px; background: #1f2f46; color: white; padding: 6px; border-radius: 5px; text-decoration: none; font-size: 13px; text-align: center; }
        .btn-edit:hover { background: #2d4466; }
        /* footer ثابت في الأسفل */
        footer { background: #1f2f46; color: white; text-align: center; padding: 15px; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>

<nav>
    <a href="index.php">الرئيسية</a>
    <a href="about.php">عن المتحف</a>
    <a href="products.php">المعروضات</a>
    <a href="login.php">تسجيل الدخول</a>
    <a href="register.php">إنشاء حساب</a>
</nav>

<section>
    <h2>أشهر المعروضات</h2>
    <div class="gallery">
        <?php while ($row = mysqli_fetch_assoc($result)) {
            $img   = !empty($row['image_url']) ? $row['image_url'] : 'https://via.placeholder.com/220x160?text=صورة';
            $price = $row['price'] > 0 ? $row['price'] . ' جنيه' : 'مجاني';
            echo "
            <div class='card'>
                <img src='{$img}' alt='{$row['name']}'>
                <div class='card-body'>
                    <h3>{$row['name']}</h3>
                    <p>{$row['description']}</p>
                    <div class='price'>{$price}</div>
                    <!-- زرار الحذف بيبعت الـ id للـ delete.php -->
                    <a href='delete.php?id={$row['id']}' class='btn-delete'
                       onclick='return confirm(\"هل أنت متأكد من الحذف؟\")'>حذف</a>
                    <!-- زرار التعديل بيبعت الـ id للـ edit.php -->
                    <a href='edit.php?id={$row['id']}' class='btn-edit'>تعديل</a>
                </div>
            </div>";
        } ?>
    </div>
</section>

<footer>©️ 2025 المتحف المصري الكبير</footer>
</body>
</html>