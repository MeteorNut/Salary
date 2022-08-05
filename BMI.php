<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <form method="POST">
        กรุณาป้อนความสูง H : <input type="text" name="height":>
        กรุณาป้อนน้ำหนัก W : <input type="text" name="weight":>
        <input type="submit" value="ส่งค่า">
    </form><hr>
    <?php
    if(isset($_POST['height'])){
    $height=$_POST['height'];

    if(isset($_POST['weight'])){
    $weight=$_POST['weight'];

    $BMI="";
    $BMICA="";
    $heightca="";
    $weightca="";
    $heightca=($height/100);
    $BMI=($weight/($heightca*$heightca));
        
        echo "ค่า BMI = ".number_format($BMI,2);
        echo "<br>";

    if($BMI>=23){
            echo "อยู่ในเกณฑ์อ้วน";
    }elseif($BMI >=18.5){
            echo "อยู่ในเกณฑ์ปกติ";
    }else{
            echo "อยู่ในเกณฑ์ผอม";
        }
    }
}
    ?>
</body>
</html>