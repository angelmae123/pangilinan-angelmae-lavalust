<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products View</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .product-header h2 {
            margin: 0;
        }

        .add-product {
            display: inline-block;
            padding: 10px 16px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .add-product:hover {
            background-color: #555;
        }

        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .action-link {
            text-decoration: none;
            margin-right: 10px;
            font-weight: bold;
        }

        .update-link {
            color: #272728;
        }

        .delete-link {
            color: #dc3545;
        }

        .action-link:hover {
            text-decoration: underline;
        }
        #logout {
            max-width: 1100px;
            margin: 0 auto 20px;
            text-align: right;
        }

        #logout a {
            display: inline-block;
            padding: 10px 16px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        #logout a:hover {
            background-color: #b02a37;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Products View</h1>
        <div id="logout">
            <a href="/logout" class="action-link logout-link" onclick="return confirm('Are you sure you want to logout?');">Logout</a>
        </div>
        <div class="product-header">
            <h2>Product List</h2>
            <a href="/createProd" class="add-product">+ Add Product</a>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $product['product_name']; ?></td>
                            <td><?= $product['description']; ?></td>
                            <td>₱<?= number_format($product['price'], 2); ?></td>
                            <td><?= $product['quantity']; ?></td>
                            <td>
                                <a href="/updateProd/<?= $product['id']; ?>" class="action-link update-link">Update</a>
                                <a href="/delete/<?= $product['id']; ?>" class="action-link delete-link" onclick="return confirm('Are you sure you want to delete this product?');"> 
                                    Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>