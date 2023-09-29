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
   $marks = array(10,20,30,11,14,15);
   foreach($marks as $mark){
    echo $mark . "<br>";
   }
   $marks[0] = 10.9;
   foreach($marks as $mark){
    echo $mark . "<br>";
   }
   array_push($marks, 50);
   foreach($marks as $mark){
    echo $mark . "<br>";
   }
   array_pop($marks);
   foreach($marks as $mark){
    echo $mark . "<br>";
   }
   $marks = array_reverse($marks);
   echo count($marks);
?>