<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$num = 5;
$location = 'tree';
$island = 'island';

$format = 'There are %d monkeys in the %s in the %s';
echo sprintf($format, $num, $location, $island);

?>