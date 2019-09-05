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
<h1>Sample Calculator</h1>
<form method="post">
    Number1:<input type="text" name="num1">
    <select name="operator">
        <option>add</option>
        <option>sub</option>
        <option>mul</option>
        <option>div</option>
    </select>
    Number2:<input type="text" name="num2">
    <br>
    <input type="submit" value="Calculator">
</form>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator=$_POST['operator'];
function calculator($number1, $number2,$op)
{
switch ($op){
    case 'add':
        echo add($number1,$number2);
        break;
    case 'sub':
       echo sub($number1,$number2);
        break;
    case 'mul':
       echo mul($number1,$number2);
        break;
    case 'div':
       echo div($number1,$number2);
        break;
}
}

function add($number1, $number2)
{
    $result = $number1 + $number2;
    return $result;
}

function sub($number1, $number2)
{
    $result = $number1 - $number2;
    return $result;
}

function mul($number1, $number2)
{
    $result = $number1 * $number2;
    return $result;
}

function div($number1, $number2)
{
    try {
        if ($number1 == 0 || $number2 == 0) {
            throw new Exception("error");
        }
    } catch (Exception $e){
        echo $e->getMessage();
    }
    $result=$number1/$number2;
    return $result;
}
calculator($num1,$num2,$operator);
?>
</body>
</html>
