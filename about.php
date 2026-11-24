<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>عن المتحف — المتحف المصري الكبير</title>
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

        nav a:hover { color: #ffd700; }

        /* ===== Sections ===== */
        section {
            padding: 110px 20px 60px;
            text-align: center;
        }

        h2 {
            color: #1f2f46;
            margin-bottom: 20px;
            /* تأثير دخول من تحت */
            animation: slidein 1.2s ease-out forwards;
        }

        @keyframes slidein {
            from { transform: translateY(40px); opacity: 0; }
            to   { transform: translateY(0);    opacity: 1; }
        }

        p {
            max-width: 800px;
            margin: 15px auto;
            font-size: 18px;
        }

        /* ===== التسلسل الزمني ===== */
        .timeline {
            max-width: 700px;
            margin: 30px auto;
            text-align: right;
        }

        /* كل حدث في الـ timeline */
        .timeline div {
            background: white;
            padding: 15px;
            margin: 15px 0;
            border-right: 5px solid #1f2f46;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
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

<!-- ===== عن المتحف ===== -->
<section>
    <h2>عن المتحف</h2>
    <p>يقع المتحف المصري الكبير بالقرب من أهرامات الجيزة على مساحة تتجاوز 50 ألف متر مربع،
       ويُعدّ الأكبر من نوعه في العالم المخصص للحضارة المصرية القديمة.</p>

    <p>يضم المتحف أكثر من 100,000 قطعة أثرية، من بينها المجموعة الكاملة لكنوز
       الفرعون توت عنخ آمون.</p>
</section>

<!-- ===== التسلسل الزمني ===== -->
<section>
    <h2>التسلسل التاريخي</h2>

    <div class="timeline">

        <!-- كل div ده حدث في تاريخ المتحف -->
        <div>
            <strong>2002</strong> — بدأ التخطيط والتصميم للمتحف
        </div>

        <div>
            <strong>2012</strong> — بدء أعمال البناء الفعلية
        </div>

        <div>
            <strong>2018</strong> — اكتمال الهيكل الإنشائي للمبنى
        </div>

        <div>
            <strong>2021</strong> — الافتتاح الجزئي للزوار
        </div>

        <div>
            <strong>2023</strong> — الافتتاح الرسمي الكامل
        </div>

    </div>
</section>

<!-- ===== Footer ===== -->
<footer>
    ©️ 2025 المتحف المصري الكبير
</footer>

</body>
</html>
