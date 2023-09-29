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
if(isset($_POST["confirm"])){
    if(isset($_POST["payment"])){
        switch($_POST["payment"]){
            case "visa":
                echo " you  selected visa payment method";
                break;
            case "master":
                echo " you  selected master payment method";
                break;
            case "paypal":
                echo " you  selected paypal payment method";
                break;
            default:
            echo "";
                break;
        }
    }
    else{
        echo "Please select a payement method";
    }
}

?>