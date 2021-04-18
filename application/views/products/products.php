<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Products | Semi Restful Route Demo</title>
</head>
<body>
    <h1>Products</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
<?php foreach ($products as $product) { ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['description']; ?></td>
            <td>$<?php echo $product['price']; ?></td>
            <td>
                <a href='products/show/<?php echo $product['id'] ?>'>Show</a>
                <a href='products/edit/<?php echo $product['id'] ?>'>Edit</a>
                <a href='products/destroy/<?php echo $product['id'] ?>'>Remove</a>
            </td>
        </tr>
<?php } ?>
    </table>
    <a href='products/new'>Add a new product</a>
</body>
</html>