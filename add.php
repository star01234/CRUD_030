<?php
require_once 'db/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (name, category, price, stock, description) VALUES ('$name', '$category', '$price', '$stock', '$description')";
    if ($conn->query($sql)) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มสินค้า</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form class="form-box" method="post">
            <h1>🛒 เพิ่มสินค้า</h1>
            <label for="name">ชื่อสินค้า:</label>
            <input type="text" id="name" name="name" placeholder="ชื่อสินค้า" required>

            <label for="category">หมวดหมู่:</label>
            <input type="text" id="category" name="category" placeholder="หมวดหมู่สินค้า" required>

            <label for="price">ราคา:</label>
            <input type="number" id="price" name="price" placeholder="ราคาสินค้า" required>

            <label for="stock">สต็อก:</label>
            <input type="number" id="stock" name="stock" placeholder="จำนวนสินค้าในสต็อก" required>

            <label for="description">รายละเอียด:</label>
            <textarea id="description" name="description" placeholder="รายละเอียดสินค้า" required></textarea>

            <button type="submit">📥 บันทึก</button>
        </form>
    </div>
</body>

</html>
