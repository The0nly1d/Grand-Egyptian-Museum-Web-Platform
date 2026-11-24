<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; padding: 50px; background: #f4f9ff; }
        .card { background: white; padding: 30px; border-radius: 10px; width: 350px; }
        input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { width: 100%; padding: 12px; background: #1f2f46; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
<div class="card">
    <h2>تسجيل الدخول</h2>

    <!--
        form بترسل البيانات لـ login.php
        method="POST" عشان الباسورد ميظهرش في الـ URL
    -->
    <form action="login_backend.php" method="POST">

        <!-- نفس الـ name اللي PHP بتقراه بـ $_POST -->
        <input type="email"    name="email"    placeholder="البريد الإلكتروني"  required>
        <input type="password" name="password" placeholder="كلمة المرور"         required>

        <button type="submit">دخول</button>
    </form>

    <p style="text-align:center"><a href="register.php">مش عندك حساب؟ سجّل</a></p>
</div>
</body>
</html>
