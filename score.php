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
        กรุณาป้อนคะแนน : <input type="text" name="score":>
        <input type="submit" value="ส่งค่า">
    </form><hr>
    <?php
    if(isset($_POST['score'])){

    $score=$_POST ['score'];
    if($score>=80)
            echo"คุณได้เกรด A";
        elseif($score >=70)
            echo"คุณได้เกรด B";
        elseif($score >=60)
            echo"คุณได้เกรด C";
        elseif($score >=50)
            echo"คุณได้เกรด D";
        else  
            echo"คุณได้เกรด F";
    }
    ?>
</body>
</html>