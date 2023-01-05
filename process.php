<!--
Paul Woods, Jack Alferez,Jazmin Gonzalez
Jan 5, 2023
https://paulwoods.greenriverdev.com/328/cupcakes/
https://github.com/paul-w42/cupcakes

This program takes in a visitors name and cupcake selection, then displays
that selection with their name and total cost on form submission.
-->

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

    // DISPLAY CODE ERRORS!
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Is name set and at least one character
    if ((isset($_POST['name'])) && strlen($_POST['name']) > 0) {

        // is flavor set, and at least 2 choices selected
        if (!isset($_POST['flavor']) || (sizeof($_POST['flavor']) < 2)) {
            echo "Please select at least 2 flavors.  Thank You.";
        } else {

            $flavor = $_POST['flavor'];

            echo "<h3>Thank You, " . $_POST['name'] . ", for your order!</h3>";
            echo "order summary:<br>";

            echo "<ul> ";   // begin unordered list

            foreach($flavor as $selection) {
                echo "<li> $selection</li>";
            }

            echo "</ul>";   // end unordered list

            echo "<br>Order Total: $";

            // calculate cost
            $cost = sizeof($flavor) * 3.5;

            // format cost output
            $sCost = number_format($cost, 2, '.', ',');

            echo $sCost;

        }
    } else {
        echo "Please enter your name.  Thank You!";
    }

?>
</body>
</html>