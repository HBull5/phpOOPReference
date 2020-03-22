<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Sandbox...</h1>

<?php 
    require('firstClass.php');
    require('secondClass.php');
    echo FirstClass::EXAMPLE;
    echo '<br>';
    echo FirstClass::test();
    $container = new FirstClass();
    echo '<br>';
    echo $container->public;
    echo '<br>';
    echo SecondClass::$static;
    echo '<br>';
    SecondClass::anotherTest();
?>
    
</body>
</html>