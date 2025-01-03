<?php
require_once 'db/connect.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id = $id");
$product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];

    $sql = "UPDATE products SET name='$name', category='$category', price='$price', stock='$stock', description='$description' WHERE id = $id";
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
    <title>แก้ไขสินค้า</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form class="form-box" method="post">
            <h1>✏️ แก้ไขสินค้า</h1>
            <label for="name">ชื่อสินค้า:</label>
            <input type="text" id="name" name="name" value="<?= $product['name'] ?>" required>

            <label for="category">หมวดหมู่:</label>
            <input type="text" id="category" name="category" value="<?= $product['category'] ?>" required>

            <label for="price">ราคา:</label>
            <input type="number" id="price" name="price" value="<?= $product['price'] ?>" required>

            <label for="stock">สต็อก:</label>
            <input type="number" id="stock" name="stock" value="<?= $product['stock'] ?>" required>

            <label for="description">รายละเอียด:</label>
            <textarea id="description" name="description" required><?= $product['description'] ?></textarea>

            <button type="submit">💾 บันทึก</button>
        </form>
    </div>
</body>

</html> 
