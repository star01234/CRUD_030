<?php
require_once 'db/connect.php';

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการสินค้า</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <header class="bg-gradient text-dark py-5 text-center shadow-lg">
        <div class="container">
            <h1 class="display-4">📦 รายการสินค้า</h1>
            <a href="add.php" class="btn btn-lg btn-primary mt-4 shadow">เพิ่มสินค้า</a>
        </div>
    </header>
    <main class="py-5">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle shadow-sm">
                    <thead class="bg-primary text-white text-center">
                        <tr>
                            <th>ชื่อสินค้า</th>
                            <th>หมวดหมู่</th>
                            <th>ราคา</th>
                            <th>สต็อก</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr class="text-center">
                                <td><?= htmlspecialchars($row['name']) ?></td>
                                <td><?= htmlspecialchars($row['category']) ?></td>
                                <td><?= htmlspecialchars($row['price']) ?> ฿</td>
                                <td><?= htmlspecialchars($row['stock']) ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-success">แก้ไข</a>
                                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger"
                                       onclick="return confirm('คุณต้องการลบสินค้านี้หรือไม่?')">ลบ</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>© <?= date("Y") ?> Your Shop. All Rights Reserved.</p>
    </footer>
</body>

</html>
