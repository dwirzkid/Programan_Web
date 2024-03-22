<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
</head>
<body>
    <h2>Guest Book</h2>
    <form action="process.php" method="post">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email : </label>
        <input type="email" id="email" name="email"><br>
        <label for="comment">comment : </label>
        <textarea  id="comment" name="comment"></textarea>
        <input type="submit" value="submit"><br>
    </form>

    <h3>Comments:</h3>
    <?php
        include 'comment.php'
    ?>
    
</body>
</html>