<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST['flavor']) && isset($_POST['name'])) {
        echo "<h3>Thank You, " . $_POST['name'] . ", for your order!</h3>";
        echo "order summary:<br>";

        echo "<ul> ";
        foreach($_POST['flavor'] as $selection) {
            echo "<li> $selection</li>";
        }

        echo "<br>Order Total: ";

    }
?>
</body>
</html>