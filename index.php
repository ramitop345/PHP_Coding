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
        <label for="">radius:</label>
        
    </form>
    
</body>
</html>

<?php
    //if else statements
    $age = 18;
    if ($age >= 15){
        echo "you are old";
    }
    elseif ($age >=0) {
        echo "your are young";
    }
    else echo "wrong value";

    //switch statement
    switch($age){
        case 5:
            break;
        default:
            echo "this is your age";
            break;
    }

    //for loop
    for ($i=0;$i<5;$i++){
        echo "this is a for loop <br>";
    }

    
    //while statement
    while($age>1){
        echo "age still positive <br>";
        $age-=5;
    }
?>