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
   //string manipulation
   $user = "Ramses";
   $city = "Bad Honnef";

   $username = strtolower($user);
   $username = strtoupper($user);
   $city = trim($city);
   //this function completes the string till the number of specified characters with the given character
   $username = str_pad($username,20,"-");
   $username = str_replace("s","ss",$username);
   $username = strrev($username);
   //this function creates a permutation of the input string
   $username = str_shuffle($username);
   $equals = strcmp($username, "bro");
   $count = strlen($username);
   $positon = strpos($username, "a");
   $positon = substr($username, 0, 5);
   //creates array of different words
   $city_array = explode(" ", $city);
   //creates a word out of a phrase/array with specified delimiter
   $city_word = implode("-",$city);


?>