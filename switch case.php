<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        กรุณาป้อนเกรด : <input type="text" name="grade">
        <input type="submit" value="ส่งค่า">
    </form><hr>   
    <?php
    if(isset($_POST['grade'])){
    $grade=$_POST['grade'];
    switch($grade)
    {
        case"A" :
            echo "ระดับนะแนนคือ 4=ดีมาก";
            break;
        case"B" :
            echo "ระดับนะแนนคือ 3=ดี";
            break;
        case"C" :
            echo "ระดับนะแนนคือ 2=ปานกลาง";
            break;
        case"D" :
            echo "ระดับนะแนนคือ 1=พอใช้";
            break;
        case"F" :
            echo "ระดับนะแนนคือ 0=ปรับปรุง";
            break;
        default :
            echo "คุณกรอกเกรดผิด กรุณากรอกเกรดใหม่";
            break;
    }
}
    ?>
</body>
</html>