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
        <input type="submit" value="stop" name="stop">
        
    </form>
    
</body>
</html>

<?php
//associative arrays = dictionaries = arrays made of key-values pairs

    $capitals = array("USA"=>"Washington",
                    "USE"=>"Washington",
                    "USB"=>"Washington",
                    "USC"=>"Washington",
                    "USD"=>"Washington");

    foreach($capitals as $key=>$value){
        echo "{$key} = {$value} <br>";
    }

    $capitals["USA"] = "Douala";
    $capitals["CAMEROUN"] = "Douala";
    array_pop($capitals);

    //retrieving alls keys from dictionary
    $keys = array_keys($capitals);
    $values = array_values($capitals);

    foreach($capitals as $key=>$value){
        echo "{$key} = {$value} <br>";
    }


?>