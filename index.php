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
<h1>Cupcake Fundraiser</h1>

<form action="process.php" method="post">

    <!-- users name -->
    <p>Your Name<br>
        <input type="text" name="name"></p>

    <!-- cupcake selections array 'flavor' -->
    <p>Cupcake Flavors:</p>
        <input type="checkbox" name="flavor[]" value="grasshopper"><label>The Grasshopper</label><br>
        <input type="checkbox" name="flavor[]" value="whiskey"><label>Whiskey Maple Bacon</label><br>
        <input type="checkbox" name="flavor[]" value="carrot"><label>Carrot Walnut</label><br>
        <input type="checkbox" name="flavor[]" value="caramel"><label>Salted Caramel Cupcake</label><br>
        <input type="checkbox" name="flavor[]" value="velvet"><label>Red Velvet</label><br>
        <input type="checkbox" name="flavor[]" value="lemon"><label>Lemon Drop</label><br>
        <input type="checkbox" name="flavor[]" value="tiramisu"><label>Tiramisu</label><br>

    <input type="submit" value="Order">
</form>
</body>
</html>