<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product <?php echo $id ?> Info | Semi Restful Route Demo</title>
</head>
<body>
    <h1>Product <?php echo $id ?></h1>
    <p>Name: <?php echo $name ?></p>
    <p>Description: <?php echo $description ?></p>
    <p>Price: $<?php echo $price ?></p>
    <a href='../edit/<?php echo $id ?>'>Edit</a> | <a href='../../products'>Back</a>
</body>
</html>