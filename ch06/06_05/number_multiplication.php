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
<table>
<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];
$figures = [1,2,3,4,5,6,7,8,9,10];

echo "<tr>";
foreach ($numbers as $number){
    echo "<th>".$number."<th>";
}
echo "</tr>";
foreach ($numbers as $number){
    echo "<tr>";
    foreach ($figures as $figure) {
        $answer = $number * $figure;
        echo "<td>".$answer."<td>";
    }
    echo "</tr>";
//    echo $result . "<br>";
}
?>
</table>
</body>
</html>
