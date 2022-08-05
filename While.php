<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php
$sum = 0;
$i = 1;
while($i<=10)
{
    $sum =$sum+$i;
    echo $i."</br>";
    $i = $i +2;
}
    echo"ผลบวกเลขคี่ 1-10 =$sum";
    ?>
</body>
</html>