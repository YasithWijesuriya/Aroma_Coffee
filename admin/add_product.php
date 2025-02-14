<?php
session_start();
include("../connect2.php");

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = "../pics/" . basename($image);

    $stmt = $conn->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $description, $price, $image]);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $message = "Product added successfully!";
    } else {
        $message = "Failed to upload image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="../admin-style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .admin-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input, textarea, button {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        p {
            text-align: center;
            color: #28a745;
            font-weight: bold;
        }
        .error {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <h1>Add New Product</h1>
        <form action="add_product.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Product Name" required>
            <textarea name="description" placeholder="Product Description" required></textarea>
            <input type="number" step="0.01" name="price" placeholder="Price" required>
            <input type="file" name="image" accept="image/*" required>
            <button type="submit" name="add_product">Add Product</button>
        </form>
        <?php if (isset($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>
    </div>
</body>
</html>