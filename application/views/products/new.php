<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create a new product | Semi Restful Route Demo</title>
</head>
<body>
    <h1>Add a new product</h1>
    <form action='create' method='post'>
        <p>Name</p>
        <input type='text' name='name'>
        <p>Description</p>
        <input type='text' name='description'>
        <p>Price</p>
        <input type='number' name='price'><br>
        <input type='submit' value='Create'>
    </form>
    <a href='../products'>Go back</a>
</body>
</html>