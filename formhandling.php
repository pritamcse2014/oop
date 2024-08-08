<?php
    if (isset($_POST['name'])) {
        // echo $_POST['name'];
        class name {
            function getName($name) {
                echo "User Name is $name";
            }
        }
        $name = new name();
        $name->getName($_POST['name']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling PHP</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Your Name">
        <button type="submit">Click Me</button>
    </form>
</body>
</html>