<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>post method with html</h1>

    <form method="post">
        name : <input type="text" name="name"><br>
    <input type="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['name']))
        {
            echo"your name is :" . $_POST['name'];
        }

    
    ?>
    
</body>
</html>