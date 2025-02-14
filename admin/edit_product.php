<?php
session_start();
include("../connect2.php");

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = "../pics/" . basename($image);

    if (!empty($image)) {
        $stmt = $conn->prepare("UPDATE products SET name = ?, description = ?, price = ?, image = ? WHERE id = ?");
        $stmt->execute([$name, $description, $price, $image, $id]);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        $stmt = $conn->prepare("UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?");
        $stmt->execute([$name, $description, $price, $id]);
    }

    $message = "Product updated successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="../admin-style.css">
</head>
<body>
    <div class="admin-container">
        <h1>Edit Product</h1>
        <form action="edit_product.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <input type="text" name="name" value="<?= $product['name'] ?>" required>
            <textarea name="description" required><?= $product['description'] ?></textarea>
            <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required>
            <input type="file" name="image" accept="image/*">
            <button type="submit" name="update_product">Update Product</button>
        </form>
        <?php if (isset($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>
    </div>
</body>
</html>