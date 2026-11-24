<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إنشاء حساب</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; padding: 50px; background: #f4f9ff; }
        .card { background: white; padding: 30px; border-radius: 10px; width: 350px; }
        input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { width: 100%; padding: 12px; background: #1f2f46; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
<div class="card">
    <h2>إنشاء حساب</h2>

    <!--
        form بترسل البيانات لـ register.php
        method="POST" يعني البيانات بتتبعت في الـ body مش في الـ URL
        action هو المكان اللي هتروحله البيانات
    -->
    <form action="register_backend.php" method="POST">

        <!-- name="" ده اسم الـ field — بيتبعت لـ PHP كـ $_POST['full_name'] -->
        <input type="text"     name="full_name" placeholder="الاسم"               required>
        <input type="email"    name="email"     placeholder="البريد الإلكتروني"   required>
        <input type="password" name="password"  placeholder="كلمة المرور"          required>

        <!-- زرار الإرسال — بيبعت الـ form لـ register.php -->
        <button type="submit">تسجيل</button>
    </form>

    <p style="text-align:center"><a href="login.php">عندك حساب؟ سجّل دخولك</a></p>
</div>
</body>
</html>
