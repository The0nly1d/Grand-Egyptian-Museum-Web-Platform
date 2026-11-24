-- =============================================
-- قاعدة البيانات: المتحف المصري الكبير
-- =============================================

CREATE DATABASE IF NOT EXISTS gem_db;

USE gem_db ;

-- =============================================
-- جدول المستخدمين (Users)
-- =============================================
CREATE TABLE IF NOT EXISTS users (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    full_name   VARCHAR(100)        NOT NULL,
    email       VARCHAR(150)        NOT NULL UNIQUE,
    password    VARCHAR(255)        NOT NULL,   -- hashed بـ password_hash()
    created_at  TIMESTAMP           DEFAULT CURRENT_TIMESTAMP
);

-- =============================================
-- جدول المنتجات / المعروضات (Products)
-- =============================================
CREATE TABLE IF NOT EXISTS products (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(200)        NOT NULL,
    description TEXT,
    price       DECIMAL(10, 2)      DEFAULT 0.00,
    image_url   VARCHAR(500),
    category    VARCHAR(100),
    created_at  TIMESTAMP           DEFAULT CURRENT_TIMESTAMP
);

-- =============================================
-- بيانات تجريبية للمنتجات
-- =============================================
INSERT INTO products (name, description, price, image_url, category) VALUES
('تمثال توت عنخ آمون',   'نسخة طبق الأصل من تمثال الفرعون الذهبي',       250.00, 'images/tutankhamun.jpg',  'تماثيل'),
('بردية فرعونية',        'بردية مرسومة يدوياً بالهيروغليفية',             120.00, 'images/papyrus.jpg',      'فنون'),
('قناع أنوبيس',          'قناع إله الموتى مصنوع من الراتنج عالي الجودة', 180.00, 'images/anubis.jpg',       'أقنعة'),
('تمثال أبو الهول',      'منحوتة تذكارية لأبو الهول الشهير',             95.00,  'images/sphinx.jpg',       'تماثيل'),
('عقد فرعوني',           'مجوهرات مستوحاة من الحضارة المصرية القديمة',   75.00,  'images/necklace.jpg',     'مجوهرات');
