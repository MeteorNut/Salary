<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>
<body>
    <?php
$i = 0;
$total = 0;
do{
    $total += $i;
    $i++;
    echo"รอบที่ $i <br/>";
}while($i<=10);
    echo"ผลบวกจาก 1-10 ผลที่ได้ = ".$total;
    ?>
</body>
</html>