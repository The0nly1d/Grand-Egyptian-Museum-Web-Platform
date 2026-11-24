<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>المتحف المصري الكبير</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Cairo', sans-serif;
            background-color: #f4f9ff;
            line-height: 1.9;
            scroll-behavior: smooth;
            color: #2b3b50;
        }

        /* ===== Navbar ===== */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: #1f2f46;
            padding: 12px;
            text-align: center;
            z-index: 1000;
        }

        nav a {
            color: white;
            margin: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffd700;
        }

        /* ===== Sections ===== */
        section {
            padding: 110px 20px 60px;
            min-height: 100vh;
            text-align: center;
        }

        /* ===== العنوان الرئيسي مع تأثير الكتابة ===== */
        h1 {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            /* border-left بدل border-right عشان الاتجاه RTL */
            border-right: 3px solid #1f2f46;
            animation: typing 3s steps(30) forwards, blink 0.6s infinite;
        }

        /* تأثير الكتابة خطوة خطوة */
        @keyframes typing {
            from { width: 0; }
            to   { width: 100%; }
        }

        /* وميض المؤشر */
        @keyframes blink {
            50% { border-color: transparent; }
        }

        /* ===== Paragraphs ===== */
        p {
            max-width: 800px;
            margin: 15px auto;
            font-size: 18px;
        }

        /* ===== أزرار ===== */
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 35px;
            background: #1f2f46;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #2d4466;
        }

        /* ===== Footer ===== */
        footer {
            background: #1f2f46;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>

<!-- ===== Navbar ===== -->
<nav>
    <a href="login.php">تسجيل الدخول</a>
    <a href="index.php">الرئيسية</a>
    <a href="about.php">عن المتحف</a>
    <a href="products.php">المعروضات</a>
    <a href="register.php">إنشاء حساب</a>
</nav>

<!-- ===== القسم الرئيسي ===== -->
<section>
    <!-- العنوان مع تأثير الكتابة -->
    <h1>المتحف المصري الكبير</h1>

    <p>يُعد المتحف المصري الكبير واحداً من أبرز المشاريع الثقافية في مصر،
       ويضم أكبر مجموعة من الآثار الفرعونية في العالم.</p>

    <p>يقع بالقرب من أهرامات الجيزة الشهيرة، ويستقبل زوار من جميع أنحاء العالم.</p>

    <!-- زرار للانتقال لصفحة المعروضات -->
    <a href="products.php" class="btn">تصفح المعروضات</a>
    &nbsp;
    <a href="about.php" class="btn">اعرف أكثر</a>
</section>

<!-- ===== Footer ===== -->
<footer>
    ©️ 2025 المتحف المصري الكبير
</footer>

</body>
</html>
