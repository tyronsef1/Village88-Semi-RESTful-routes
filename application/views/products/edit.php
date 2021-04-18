<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product <?php echo $id ?> | Semi Restful Route Demo</title>
</head>
<body>
    <h1>Edit Product <?php echo $id ?></h1>
    <form action='../update/<?php echo $id ?>' method='post'>
        <p>Name</p>
        <input type='text' name='name' value='<?php echo $name ?>'>
        <p>Description</p>
        <input type='text' name='description' value='<?php echo $description ?>'>
        <p>Price</p>
        <input type='number' name='price' value='<?php echo $price ?>'><br>
        <input type='submit' value='Update'>
    </form>
    <a href='../show/<?php echo $id ?>'>Show</a> | <a href='../../products'>Back</a>
</body>
</html>