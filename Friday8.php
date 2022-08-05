<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>take a test</title>
</head>
<body>
    <?php
    $salary = 130000;

    if($salary > 10000 and$salary < 50000)
        {
    echo "เงินเดือนของคุณ :: ".$salary."<br>";
    $bonus = $salary * 3.0;
    echo"โบนัสของคุณ :: ".$bonus."<br>";
    $netsalary = $salary + $bonus;
    echo"เงินเดือนสุทธิ :: ".$salary + $bonus."<br>";
    
    }elseif( $salary > 50000 and$salary < 100000)
{
    echo "เงินเดือนของคุณ :: ".$salary."<br>";
    $bonus = $salary * 2.0;
    echo"โบนัสของคุณ :: ".$bonus."<br>";
    $netsalary = $salary + $bonus;
    echo"เงินเดือนสุทธิ :: ".$salary + $bonus."<br>";
    
    }elseif( $salary > 100000 )
{
    echo "เงินเดือนของคุณ :: ".$salary."<br>";
    $bonus = $salary * 1.0;
    echo"โบนัสของคุณ :: ".$bonus."<br>";
    $netsalary = $salary + $bonus;
    echo"เงินเดือนสุทธิ :: ".$salary + $bonus."<br>";
}
    
    ?>
</body>
</html>
