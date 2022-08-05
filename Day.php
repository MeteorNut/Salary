<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day</title>
</head>
<body>
    <?php
$day = date("I");
switch($day)
{
    case"Monday" : echo"วันนี้เป็นวันจันทร์"; break;
    case"Tuesday" : echo"วันนี้เป็นวันอังคาร"; break;
    case"Wednesday" : echo"วันนี้เป็นวันพุธ"; break;
    case"Thursday" : echo"วันนี้เป็นวันพฤหัสบดี"; break;
    case"Friday" : echo"วันนี้เป็นวันศุกร์"; break;
    default :   echo"วันนี้เป็นวันหยุด";
}
    ?>
</body>
</html>