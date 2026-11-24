<?php
// edit.php
// بتعدل اسم وسعر وصورة المنتج في الـ DB

include 'db_connect.php';

$id = $_GET['id'];

// نجيب بيانات المنتج الحالية عشان نعرضها في الـ form
$qry1 = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
$data = mysqli_fetch_array($qry1);

// لو المستخدم ضغط زرار Update
if (isset($_POST['update'])) {
    $name      = $_POST['name'];
    $price     = $_POST['price'];
    // غيرنا image_url عشان ده اسم العمود في الـ DB بتاعتنا
    $image_url = $_POST['image_url'];

    // نعدل الـ name والـ price والـ image_url في الـ DB
    $sql  = "UPDATE products SET name='$name', price='$price', image_url='$image_url' WHERE id='$id'";
    $edit = mysqli_query($conn, $sql);

    if ($edit) {
        mysqli_close($conn);
        header("location:products.php");
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تعديل المنتج</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; padding: 50px; background: #f4f9ff; }
        .card { background: white; padding: 30px; border-radius: 10px; width: 350px; }
        input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { width: 100%; padding: 12px; background: #1f2f46; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
<div class="card">
    <h2>تعديل المنتج</h2>
    <form method="POST">

        <label>الاسم:</label>
        <input type="text" name="name" value="<?php echo $data['name']; ?>" required>

        <label>السعر:</label>
        <input type="text" name="price" value="<?php echo $data['price']; ?>" required>

        <!-- حقل الصورة — بتكتب اسم الصورة زي images/sphinx.jpg -->
        <label>الصورة:</label>
        <input type="text" name="image_url" value="<?php echo $data['image_url']; ?>">

        <button type="submit" name="update">تعديل</button>
    </form>
</div>
</body>
</html>