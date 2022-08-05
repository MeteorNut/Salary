<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $salary = 9000;
    if($salary <= 10000)
        {
    $tax = $salary *(7/100) ;
    echo "เงินเดือนของคุณ :: ".$salary."<br>";
    $bonus = $salary * 0.8;
    echo"โบนัสของคุณ :: ".$bonus."<br>";
    $netsalary = $salary + $bonus;
    echo"รายได้สุทธิ :: ".$salary + $bonus."<br>";
    echo"คิดภาษี 7% จากรายรับสุทธิ :: " .$tax."<br>" ;
    echo"รายรับหลังหักภาษี :: ".$netsalary - $tax;

    }elseif( $salary <= 50000)
        {
            $tax = $salary *(7/100) ;
            echo "เงินเดือนของคุณ :: ".$salary."<br>";
            $bonus = $salary * 0.5;
            echo"โบนัสของคุณ :: ".$bonus."<br>";
            $netsalary = $salary + $bonus;
            echo"รายได้สุทธิ :: ".$salary + $bonus."<br>";
            echo"คิดภาษี 7% จากรายรับสุทธิ :: " .$tax."<br>" ;
            echo"รายรับหลังหักภาษี :: ".$netsalary - $tax;
    }elseif( $salary > 50000)
        {
            $tax = $salary *(7/100) ;
            echo "เงินเดือนของคุณ :: ".$salary."<br>";
            $bonus = $salary * 0.3;
            echo"โบนัสของคุณ :: ".$bonus."<br>";
            $netsalary = $salary + $bonus;
            echo"รายได้สุทธิ :: ".$salary + $bonus."<br>";
            echo"คิดภาษี 7% จากรายรับสุทธิ :: " .$tax."<br>" ;
            echo"รายรับหลังหักภาษี :: ".$netsalary - $tax;
    }
    
    ?>
</body>
</html>
