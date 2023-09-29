<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Code</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">x:</label>
        <input type="text" name= "x">
        <label for="">y:</label>
        <input type="text" name= "y">
        <label for="">z:</label>
        <input type="text" name= "z">
        <input type="submit" value="total">
    </form>
    
</body>
</html>

<?php
   $x = $_POST["x"];
   $x = $_POST["y"];
   $x = $_POST["z"];
    $total = null;
    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = sqrt($x);
    //$total = pow($x,$y);
    //$total = max($x,$y,$z);
    //$total = min($x,$y,$z);
    //$total = pi();
    //random numbers
    //$total = rand($x,$y);
   echo $x;
?>