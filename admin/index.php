<?php
session_start();
include("../connect2.php");

// Redirect to login if not logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Fetch all products
$stmt = $conn->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../admin-style.css">
</head>
<body>
    <div class="admin-container">
        <h1>Admin Dashboard</h1>
        <a href="add_product.php" class="btn">Add New Product</a>
        <a href="logout.php" class="btn logout">Logout</a>

        <h2>Product List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td>Rs. <?= $product['price'] ?></td>
                        <td><img src="../pics/<?= $product['image'] ?>" alt="<?= $product['name'] ?>" width="50"></td>
                        <td>
                            <a href="edit_product.php?id=<?= $product['id'] ?>" class="btn">Edit</a>
                            <a href="delete_product.php?id=<?= $product['id'] ?>" class="btn delete" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>