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
        <input type="radio" name="payment" value= "visa">
        <label>visa</label><br>
        <input type="radio" name="payment" value="master">
        <label>master</label><br>
        <input type="radio" name="payment" value= "paypal">
        <label>paypal</label><br>
        <input type="submit" value="confirm" name="confirm"><br>
        
    </form>
    
</body>
</html>

<?php
    //creating functions
    function func1(){
        echo "this is a function <br>";
    }

    function func2($param){
        echo "this is a function with parameter called: {$param} <br>";
    }

    function func3(){
        echo "this is a function with a return value; <br>";
        echo "the returned value is: ";
        return "returned value";
    }


    func1();
    func2("the parameter");
    $value = func3();
    echo $value;
?>