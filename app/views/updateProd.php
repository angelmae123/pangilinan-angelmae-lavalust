<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }

    form {
        background-color: white;
        width: 400px;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
        color: #444;
    }

    input {
        width: 100%;
        padding: 12px;
        margin-bottom: 18px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        outline: none;
    }

    input:focus {
        border-color: #333;
    }

    button {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        background-color: #333;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #555;
    }
</style>
<body>
    <form action="/updateProd/<?= $product['id'] ?>" method="POST">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" value="<?= $product['product_name'] ?>" required>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" value="<?= $product['description'] ?>" required>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="<?= $product['price'] ?>" step="0.01" required>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="<?= $product['quantity'] ?>" required>
        <button type="submit">Update Product</button>
    </form>
</body>
</html>